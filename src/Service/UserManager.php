<?php

namespace App\Service;

use App\Entity\User;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserManager
{
    public function __construct(private UserPasswordHasherInterface $passwordHasher)
    {
    }

    public function hashPassword(User $user, ?string $plainPassword): void
    {
        if (!is_string($plainPassword) || trim($plainPassword) === '') {
            return;
        }

        $user->setPassword($this->passwordHasher->hashPassword($user, $plainPassword));
    }

    public function applyRoleConstraints(User $user): void
    {
        $role = $user->getRole();

        if ($role === 'Veterinaire') {
            $user->setMatricule(null);
            $user->setZoneAffectee(null);

            return;
        }

        if ($role === 'Agent Municipale') {
            $user->setOrderNumber(null);

            return;
        }

        if ($role === 'Client') {
            $user->setOrderNumber(null);
            $user->setMatricule(null);
            $user->setZoneAffectee(null);
        }
    }

    public function ensureDefaultImage(User $user, string $defaultImage = 'uploads/users/default-user.png'): void
    {
        if ($user->getUserImage() === null || $user->getUserImage() === '') {
            $user->setUserImage($defaultImage);
        }
    }

    public function extractUserFaceFromArray(array $payload): string
    {
        if (isset($payload['user_face']) && is_string($payload['user_face']) && $payload['user_face'] !== '') {
            return $payload['user_face'];
        }

        foreach ($payload as $value) {
            if (is_array($value) && isset($value['user_face']) && is_string($value['user_face']) && $value['user_face'] !== '') {
                return $value['user_face'];
            }
        }

        return '';
    }
}