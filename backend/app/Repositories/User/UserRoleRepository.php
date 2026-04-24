<?php

namespace App\Repositories\User;

use App\Models\User\UserRole;

readonly class UserRoleRepository
{
    public function __construct(private UserRole $userRole)
    {
    }
}
