<?php

namespace App\Services\User;

use App\Repositories\User\UserProfileRepository;

readonly class UserProfileService
{
    public function __construct(private UserProfileRepository $userProfileRepository)
    {
    }

    public function updateByUserId(array $data, int $userId): int
    {
        return $this->userProfileRepository->updateByUserId($data, $userId);
    }
}
