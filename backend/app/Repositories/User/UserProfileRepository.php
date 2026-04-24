<?php

namespace App\Repositories\User;

use App\Models\User\UserProfile;

readonly class UserProfileRepository
{
    public function __construct(private UserProfile $userProfile)
    {
    }

    public function updateByUserId(array $data, int $userId): int
    {
        return $this->userProfile->query()
            ->where('user_id', $userId)
            ->update($data);
    }
}
