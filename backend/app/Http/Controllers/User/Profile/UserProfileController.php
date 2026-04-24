<?php

namespace App\Http\Controllers\User\Profile;

use App\Http\Requests\User\Profile\UpdateProfileRequest;
use App\Services\User\UserProfileService;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

readonly class UserProfileController
{
    public function __construct(private UserProfileService $userProfileService)
    {
    }

    public function updateByUserId(UpdateProfileRequest $request): JsonResponse
    {
        $data = $request->validated();

        $userId = $data['userId'];

        unset($data['userId']);

        $result = $this->userProfileService->updateByUserId($data, $userId);

        return response()->json([
            'success' => $result,
            'message' => 'اطلاعات پروفایل با موفقیت ویرایش شد.',
        ], Response::HTTP_OK);
    }
}
