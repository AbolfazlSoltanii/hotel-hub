<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\User\Auth\LoginUserRequest;
use App\Http\Requests\User\Auth\RegisterUserRequest;
use App\Services\User\UserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
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
        if (Auth::check()) {
            return response()->json([
                'success' => false,
                'message' => 'شما قبلاً وارد سیستم شده‌اید! برای ثبت نام ابتدا خارج شوید.',
            ], Response::HTTP_FORBIDDEN);
        }

        $data = $request->validated();

        $user = $this->userService->create($data);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'success' => true,
            'message' => 'کاربر جدید با موفقیت ایجاد شد.',
            'data' => $user,
            'token' => $token,
        ], Response::HTTP_CREATED);
    }

    public function login(LoginUserRequest $request): JsonResponse
    {
        if (Auth::check()) {
            return response()->json([
                'success' => false,
                'message' => 'شما قبلاً وارد سیستم شده‌اید!',
            ], Response::HTTP_FORBIDDEN);
        }

        $data = $request->validated();

        $phone = $data['phone'];

        if (!Auth::attempt($request->only('phone', 'password'))) {
            throw ValidationException::withMessages([
                'phone' => ['اطلاعات وارد شده صحیح نیست.'],
            ]);
        }

        $user = $this->userService->getByPhone($phone);

        $token = $user?->createToken('auth_token')->plainTextToken;

        return response()->json([
            'success' => true,
            'message' => 'با موفقیت وارد شدید.',
            'user' => $user,
            'token' => $token,
        ], Response::HTTP_OK);
    }

    public function logout(Request $request): JsonResponse
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'success' => true,
            'message' => 'با موفقیت از سیستم خارج شدید.',
        ], Response::HTTP_OK);
    }
}
