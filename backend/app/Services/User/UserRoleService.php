<?php

namespace App\Services\User;

use App\Repositories\User\UserRoleRepository;

readonly class UserRoleService
{
    public function __construct(private UserRoleRepository $userRoleRepository)
    {
    }
}
