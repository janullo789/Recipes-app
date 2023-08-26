<?php

namespace App\Enums\User;

class UserRole
{
    const ADMIN = 'admin';
    const USER = 'user';

    const TYPES = [
        self::ADMIN,
        self::USER
    ];
}
