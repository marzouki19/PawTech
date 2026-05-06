<?php

namespace App\Service;

use App\Entity\User;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Psr\Log\LoggerInterface;

class SupabaseUserRepository
{
    private SupabaseService $supabase;
    private UserPasswordHasherInterface $passwordHasher;
    private LoggerInterface $logger;

    public function __construct(
        SupabaseService $supabase,
        UserPasswordHasherInterface $passwordHasher,
        LoggerInterface $logger
    ) {
        $this->supabase = $supabase;
        $this->passwordHasher = $passwordHasher;
        $this->logger = $logger;
    }

    public function findOneByEmail(string $email): ?User
    {
        try {
            $data = $this->supabase->select('user', ['*'], ['email' => $email]);

            if (empty($data)) {
                return null;
            }

            return $this->hydrateUser($data[0]);
        } catch (\Exception $e) {
            $this->logger->error('Supabase findOneByEmail error: ' . $e->getMessage());
            return null;
        }
    }

    public function find(int $id): ?User
    {
        try {
            $data = $this->supabase->select('user', ['*'], ['id' => $id]);

            if (empty($data)) {
                return null;
            }

            return $this->hydrateUser($data[0]);
        } catch (\Exception $e) {
            $this->logger->error('Supabase find error: ' . $e->getMessage());
            return null;
        }
    }

    public function findAll(): array
    {
        try {
            $data = $this->supabase->select('user', ['*'], ['limit' => 100]);
            return array_map([$this, 'hydrateUser'], $data);
        } catch (\Exception $e) {
            $this->logger->error('Supabase findAll error: ' . $e->getMessage());
            return [];
        }
    }

    /**
     * @return User[]
     */
    public function search(?string $query, ?string $field = 'all'): array
    {
        $query = trim((string) $query);
        $users = $this->findAll();

        if ($query === '') {
            return $users;
        }

        $field = $field ?: 'all';

        $matches = static function (User $user) use ($query, $field): bool {
            $haystacks = match ($field) {
                'first_name' => [$user->getPrenom() ?? ''],
                'last_name' => [$user->getNom() ?? ''],
                'email' => [$user->getEmail() ?? ''],
                'phone' => [(string) ($user->getTelephone() ?? '')],
                'role' => [$user->getRole() ?? ''],
                'status' => [$user->getStatus() ?? ''],
                'id' => [(string) ($user->getId() ?? '')],
                default => [
                    $user->getPrenom() ?? '',
                    $user->getNom() ?? '',
                    $user->getEmail() ?? '',
                    (string) ($user->getTelephone() ?? ''),
                    $user->getRole() ?? '',
                    $user->getStatus() ?? '',
                    (string) ($user->getId() ?? ''),
                ],
            };

            foreach ($haystacks as $haystack) {
                if (stripos($haystack, $query) !== false) {
                    return true;
                }
            }

            return false;
        };

        return array_values(array_filter($users, $matches));
    }

    /**
     * @return User[]
     */
    public function sortAll(?string $sortDir = 'asc', ?string $field = 'id'): array
    {
        $users = $this->findAll();
        $direction = strtolower((string) $sortDir) === 'desc' ? -1 : 1;
        $field = $field ?: 'id';

        usort($users, static function (User $left, User $right) use ($field, $direction): int {
            $leftValue = match ($field) {
                'first_name' => $left->getPrenom() ?? '',
                'last_name' => $left->getNom() ?? '',
                'email' => $left->getEmail() ?? '',
                'phone' => (string) ($left->getTelephone() ?? ''),
                'role' => $left->getRole() ?? '',
                'status' => $left->getStatus() ?? '',
                default => (string) ($left->getId() ?? 0),
            };

            $rightValue = match ($field) {
                'first_name' => $right->getPrenom() ?? '',
                'last_name' => $right->getNom() ?? '',
                'email' => $right->getEmail() ?? '',
                'phone' => (string) ($right->getTelephone() ?? ''),
                'role' => $right->getRole() ?? '',
                'status' => $right->getStatus() ?? '',
                default => (string) ($right->getId() ?? 0),
            };

            return $direction * strcasecmp($leftValue, $rightValue);
        });

        return $users;
    }

    public function save(User $user): bool
    {
        try {
            $data = [
                'nom' => $user->getNom(),
                'prenom' => $user->getPrenom(),
                'email' => $user->getEmail(),
                'telephone' => $user->getTelephone(),
                'role' => $user->getRole(),
                'status' => $user->getStatus(),
                'password' => $user->getPassword(),
                'user_image' => $user->getUserImage(),
            ];

            if ($user->getId()) {
                $result = $this->supabase->update('user', $data, ['id' => $user->getId()]);
            } else {
                $result = $this->supabase->insert('user', $data);
                if ($result && !empty($result)) {
                    $user->setId($result[0]['id']);
                }
            }

            return true;
        } catch (\Exception $e) {
            $this->logger->error('Supabase save error: ' . $e->getMessage());
            return false;
        }
    }

    public function delete(User $user): bool
    {
        try {
            $this->supabase->delete('user', ['id' => $user->getId()]);
            return true;
        } catch (\Exception $e) {
            $this->logger->error('Supabase delete error: ' . $e->getMessage());
            return false;
        }
    }

    private function hydrateUser(array $data): User
    {
        $user = new User();
        $user->setId($data['id'] ?? null);
        $user->setNom($data['nom'] ?? '');
        $user->setPrenom($data['prenom'] ?? '');
        $user->setEmail($data['email'] ?? '');
        $user->setTelephone($data['telephone'] ?? 0);
        $user->setRole($data['role'] ?? 'Client');
        $user->setStatus($data['status'] ?? 'Actif');
        $user->setPassword($data['password'] ?? '');
        $user->setUserImage($data['user_image'] ?? 'uploads/users/default.png');
        
        return $user;
    }
}