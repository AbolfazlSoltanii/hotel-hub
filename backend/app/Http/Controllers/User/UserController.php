<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\User\Auth\RegisterUserRequest;
use App\Http\Requests\User\DeleteUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Services\User\UserService;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

readonly class UserController
{
    public function __construct(private UserService $userService)
    {
    }

    public function index(): JsonResponse
    {
        $users = $this->userService->index();

        return response()->json([
            'success' => true,
            'data' => $users,
        ], Response::HTTP_OK);
    }

    /**
     * @throws Throwable
     */
    public function store(RegisterUserRequest $request): JsonResponse
    {
        $data = $request->validated();

        $user = $this->userService->create($data);

        return response()->json([
            'success' => true,
            'message' => 'کاربر جدید با موفقیت ایجاد شد.',
            'data' => $user,
        ], Response::HTTP_CREATED);
    }

    public function show(int $id): JsonResponse
    {
        $user = $this->userService->get($id);

        return response()->json([
            'success' => true,
            'data' => $user,
        ], Response::HTTP_OK);
    }

    /**
     * @throws Throwable
     */
    public function update(UpdateUserRequest $request, int $id): JsonResponse
    {
        $data = $request->validated();

        unset($data['id']);

        if (!count($data)) {
            return response()->json([
                'success' => false,
                'message' => 'حداقل یک فیلد برای ویرایش ارسال کنید.',
            ], Response::HTTP_BAD_REQUEST);
        }

        $result = $this->userService->update($data, $id);

        return response()->json([
            'success' => $result,
            'message' => 'اطلاعات کاربر با موفقیت ویرایش شد.',
        ], Response::HTTP_OK);
    }

    public function destroy(DeleteUserRequest $request): JsonResponse
    {
        $data = $request->validated();
        $id =  $data['id'];

        $result = $this->userService->delete($id);

        return response()->json([
            'success' => $result,
            'message' => 'کاربر با موفقیت حذف شد.',
        ], Response::HTTP_OK);
    }
}
