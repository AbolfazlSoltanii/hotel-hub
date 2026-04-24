<?php

namespace App\Http\Controllers\Room;

use App\Http\Requests\Room\CreateRoomRequest;
use App\Http\Requests\Room\DeleteRoomRequest;
use App\Http\Requests\Room\UpdateRoomRequest;
use App\Services\Room\RoomService;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

readonly class RoomController
{
    public function __construct(private RoomService $roomService)
    {
    }

    public function index(): JsonResponse
    {
        $rooms = $this->roomService->index();

        return response()->json([
            'success' => true,
            'data' => $rooms,
        ], Response::HTTP_OK);
    }

    public function store(CreateRoomRequest $request): JsonResponse
    {
        $data = $request->validated();

        $room = $this->roomService->create($data);

        return response()->json([
            'success' => true,
            'message' => 'اتاق جدید با موفقیت ایجاد شد.',
            'data' => $room,
        ], Response::HTTP_CREATED);
    }

    public function show(int $id): JsonResponse
    {
        $room = $this->roomService->get($id);

        return response()->json([
            'success' => true,
            'data' => $room,
        ], Response::HTTP_OK);
    }

    public function update(UpdateRoomRequest $request, int $id): JsonResponse
    {
        $data = $request->validated();

        unset($data['id']);

        if (!count($data)) {
            return response()->json([
                'success' => false,
                'message' => 'حداقل یک فیلد برای ویرایش ارسال کنید.',
            ], Response::HTTP_BAD_REQUEST);
        }

        $result = $this->roomService->update($data, $id);

        return response()->json([
            'success' => $result,
            'message' => 'اطلاعات اتاق با موفقیت ویرایش شد.',
        ], Response::HTTP_OK);
    }

    public function destroy(DeleteRoomRequest $request): JsonResponse
    {
        $data = $request->validated();
        $id = $data['id'];

        $result = $this->roomService->delete($id);

        return response()->json([
            'success' => $result,
            'message' => 'اتاق با موفقیت حذف شد.',
        ], Response::HTTP_OK);
    }
}
