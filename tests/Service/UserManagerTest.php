<?php

namespace App\Tests;

use App\Entity\User;
use App\Service\UserManager;
use PHPUnit\Framework\TestCase;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserManagerTest extends TestCase
{
    public function testHashPasswordSkipsWhenPasswordIsEmpty(): void
    {
        $user = (new User())->setPassword('existing-password');

        $hasher = $this->createMock(UserPasswordHasherInterface::class);
        $hasher->expects($this->never())->method('hashPassword');

        $manager = new UserManager($hasher);
        $manager->hashPassword($user, '');

        $this->assertSame('existing-password', $user->getPassword());
    }

    public function testHashPasswordHashesWhenPasswordIsProvided(): void
    {
        $user = new User();

        $hasher = $this->createMock(UserPasswordHasherInterface::class);
        $hasher
            ->expects($this->once())
            ->method('hashPassword')
            ->with($user, 'Plain123')
            ->willReturn('hashed-value');

        $manager = new UserManager($hasher);
        $manager->hashPassword($user, 'Plain123');

        $this->assertSame('hashed-value', $user->getPassword());
    }

    public function testApplyRoleConstraintsForVeterinaire(): void
    {
        $user = (new User())
            ->setRole('Veterinaire')
            ->setOrderNumber(42)
            ->setMatricule('M-12')
            ->setZoneAffectee('Nord');

        $manager = new UserManager($this->createMock(UserPasswordHasherInterface::class));
        $manager->applyRoleConstraints($user);

        $this->assertSame(42, $user->getOrderNumber());
        $this->assertNull($user->getMatricule());
        $this->assertNull($user->getZoneAffectee());
    }

    public function testApplyRoleConstraintsForAgentMunicipale(): void
    {
        $user = (new User())
            ->setRole('Agent Municipale')
            ->setOrderNumber(99)
            ->setMatricule('AG-9')
            ->setZoneAffectee('Centre');

        $manager = new UserManager($this->createMock(UserPasswordHasherInterface::class));
        $manager->applyRoleConstraints($user);

        $this->assertNull($user->getOrderNumber());
        $this->assertSame('AG-9', $user->getMatricule());
        $this->assertSame('Centre', $user->getZoneAffectee());
    }

    public function testApplyRoleConstraintsForClient(): void
    {
        $user = (new User())
            ->setRole('Client')
            ->setOrderNumber(77)
            ->setMatricule('CL-7')
            ->setZoneAffectee('Sud');

        $manager = new UserManager($this->createMock(UserPasswordHasherInterface::class));
        $manager->applyRoleConstraints($user);

        $this->assertNull($user->getOrderNumber());
        $this->assertNull($user->getMatricule());
        $this->assertNull($user->getZoneAffectee());
    }

    public function testEnsureDefaultImageSetsFallbackWhenImageIsMissing(): void
    {
        $user = new User();

        $manager = new UserManager($this->createMock(UserPasswordHasherInterface::class));
        $manager->ensureDefaultImage($user, 'uploads/users/default.png');

        $this->assertSame('uploads/users/default.png', $user->getUserImage());
    }

    public function testEnsureDefaultImageKeepsExistingImage(): void
    {
        $user = (new User())->setUserImage('uploads/users/custom.png');

        $manager = new UserManager($this->createMock(UserPasswordHasherInterface::class));
        $manager->ensureDefaultImage($user, 'uploads/users/default.png');

        $this->assertSame('uploads/users/custom.png', $user->getUserImage());
    }

    public function testExtractUserFaceFromArrayReturnsDirectValue(): void
    {
        $manager = new UserManager($this->createMock(UserPasswordHasherInterface::class));

        $result = $manager->extractUserFaceFromArray([
            'user_face' => 'data:image/png;base64,abc123',
        ]);

        $this->assertSame('data:image/png;base64,abc123', $result);
    }

    public function testExtractUserFaceFromArrayReturnsNestedValue(): void
    {
        $manager = new UserManager($this->createMock(UserPasswordHasherInterface::class));

        $result = $manager->extractUserFaceFromArray([
            'signup' => ['user_face' => 'nested-face-data'],
        ]);

        $this->assertSame('nested-face-data', $result);
    }

    public function testExtractUserFaceFromArrayReturnsEmptyStringWhenMissing(): void
    {
        $manager = new UserManager($this->createMock(UserPasswordHasherInterface::class));

        $result = $manager->extractUserFaceFromArray([
            'signup' => ['email' => 'test@example.com'],
        ]);

        $this->assertSame('', $result);
    }
}