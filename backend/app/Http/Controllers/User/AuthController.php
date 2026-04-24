<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\User\RegisterUserRequest;
use App\Services\User\UserService;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

readonly class AuthController
{
    public function __construct(
        private UserService $userService
    )
    {
    }

    /**
     * @throws Throwable
     */
    public function register(RegisterUserRequest $request): JsonResponse
    {
        $data = $request->validated();

        $user = $this->userService->create($data);

        return response()->json([
            'success' => true,
            'message' => 'کاربر جدید با موفقیت ایجاد شد.',
            'data' => $user,
        ], Response::HTTP_CREATED);
    }
}
