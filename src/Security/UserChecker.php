<?php

namespace App\Security;

use App\Entity\User;
use Symfony\Component\Security\Core\Exception\AccountExpiredException;
use Symfony\Component\Security\Core\Exception\DisabledAccountException;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class UserChecker implements UserCheckerInterface
{
    public function checkPreAuth(UserInterface $user): void
    {
        if (!$user instanceof User) {
            return;
        }

        // Check if user account is disabled
        if (method_exists($user, 'isEnabled') && !$user->isEnabled()) {
            throw new DisabledAccountException('User account is disabled.');
        }
    }

    public function checkPostAuth(UserInterface $user): void
    {
        if (!$user instanceof User) {
            return;
        }

        // Check if user account has expired
        if (method_exists($user, 'getExpiresAt') && $user->getExpiresAt() !== null) {
            if ($user->getExpiresAt() < new \DateTime()) {
                throw new AccountExpiredException('User account has expired.');
            }
        }
    }
}
