<?php

namespace App\Http\Controllers\Hotel;

use App\Http\Requests\Hotel\CreateHotelRequest;
use App\Http\Requests\Hotel\DeleteHotelRequest;
use App\Http\Requests\Hotel\UpdateHotelRequest;
use App\Services\Hotel\HotelService;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

readonly class HotelController
{
    public function __construct(
        private HotelService $hotelService
    )
    {
    }

    public function index(): JsonResponse
    {
        $hotels = $this->hotelService->index();

        return response()->json([
            'success' => true,
            'data' => $hotels,
        ], Response::HTTP_OK);
    }

    public function store(CreateHotelRequest $request): JsonResponse
    {
        $data = $request->validated();

        $hotel = $this->hotelService->create($data);

        return response()->json([
            'success' => true,
            'message' => 'هتل جدید با موفقیت ایجاد شد.',
            'data' => $hotel,
        ], Response::HTTP_CREATED);
    }

    public function show(int $id): JsonResponse
    {
        $hotel = $this->hotelService->get($id);

        return response()->json([
            'success' => true,
            'data' => $hotel,
        ], Response::HTTP_OK);
    }

    public function update(UpdateHotelRequest $request, int $id): JsonResponse
    {
            $data = $request->validated();

        unset($data['id']);

        if (!count($data)) {
            return response()->json([
                'success' => false,
                'message' => 'حداقل یک فیلد برای ویرایش ارسال کنید.',
            ], Response::HTTP_BAD_REQUEST);
        }

        $result = $this->hotelService->update($data, $id);

        return response()->json([
            'success' => $result,
            'message' => 'اطلاعات هتل با موفقیت ویرایش شد.',
        ], Response::HTTP_OK);
    }

    public function destroy(DeleteHotelRequest $request): JsonResponse
    {
        $data = $request->validated();
        $id = $data['id'];

        $result = $this->hotelService->delete($id);

        return response()->json([
            'success' => $result,
            'message' => 'هتل با موفقیت حذف شد.',
        ], Response::HTTP_OK);
    }
}
