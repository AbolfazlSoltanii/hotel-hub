<?php

namespace App\Services\User;

use App\Repositories\User\UserProfileRepository;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

readonly class UserProfileService
{
    public function __construct(private UserProfileRepository $userProfileRepository)
    {
    }

    public function updateByUserId(array $data, int $userId): int
    {
//        if ($data['avatar'] && Storage::disk('public')->exists($data['avatar'])) {
//            Storage::disk('public')->delete($data['avatar']);
//        }

//        $file = $request->file('avatar');
//        $fileName = Str::random(40) . '.' . $file->getClientOriginalExtension();
//        $path = $file->storeAs('avatars', $fileName, 'public');

        return $this->userProfileRepository->updateByUserId($data, $userId);
    }
}
