<?php

namespace App\Http\Controllers\Amenity;

use App\Http\Requests\Amenity\CreateAmenityRequest;
use App\Http\Requests\Amenity\DeleteAmenityRequest;
use App\Http\Requests\Amenity\UpdateAmenityRequest;
use App\Services\Amenity\AmenityService;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

readonly class AmenityController
{
    public function __construct(private AmenityService $amenityService)
    {
    }

    public function index(): JsonResponse
    {
        $amenities = $this->amenityService->index();

        return response()->json([
            'success' => true,
            'data' => $amenities,
        ], Response::HTTP_OK);
    }

    public function store(CreateAmenityRequest $request): JsonResponse
    {
        $data = $request->validated();

        $amenity = $this->amenityService->create($data);

        return response()->json([
            'success' => true,
            'message' => 'امکانات جدید با موفقیت ایجاد شد.',
            'data' => $amenity,
        ], Response::HTTP_CREATED);
    }

    public function show(int $id): JsonResponse
    {
        $amenity = $this->amenityService->get($id);

        return response()->json([
            'success' => true,
            'data' => $amenity,
        ], Response::HTTP_OK);
    }

    public function update(UpdateAmenityRequest $request, int $id): JsonResponse
    {
        $data = $request->validated();

        unset($data['id']);

        if (!count($data)) {
            return response()->json([
                'success' => false,
                'message' => 'حداقل یک فیلد برای ویرایش ارسال کنید.',
            ], Response::HTTP_BAD_REQUEST);
        }

        $result = $this->amenityService->update($data, $id);

        return response()->json([
            'success' => $result,
            'message' => 'اطلاعات امکانات با موفقیت ویرایش شد.',
        ], Response::HTTP_OK);
    }

    public function destroy(DeleteAmenityRequest $request): JsonResponse
    {
        $data = $request->validated();
        $id = $data['id'];

        $result = $this->amenityService->delete($id);

        return response()->json([
            'success' => $result,
            'message' => 'امکانات با موفقیت حذف شد.',
        ], Response::HTTP_OK);
    }
}
