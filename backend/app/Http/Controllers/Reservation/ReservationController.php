<?php

namespace App\Http\Controllers\Reservation;

use App\Http\Requests\Reservation\CreateReservationRequest;
use App\Http\Requests\Reservation\DeleteReservationRequest;
use App\Http\Requests\Reservation\UpdateReservationRequest;
use App\Services\Reservation\ReservationService;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

readonly class ReservationController
{
    public function __construct(private ReservationService $reservationService)
    {
    }

    public function index(): JsonResponse
    {
        $reservations = $this->reservationService->index();

        return response()->json([
            'success' => true,
            'data' => $reservations,
        ], Response::HTTP_OK);
    }

    public function store(CreateReservationRequest $request): JsonResponse
    {
        $data = $request->validated();

        $reservation = $this->reservationService->create($data);

        return response()->json([
            'success' => true,
            'message' => 'رزرو جدید با موفقیت ایجاد شد.',
            'data' => $reservation,
        ], Response::HTTP_CREATED);
    }

    public function show(string $id): JsonResponse
    {
        $reservation = $this->reservationService->get($id);

        return response()->json([
            'success' => true,
            'data' => $reservation,
        ], Response::HTTP_OK);
    }

    public function update(UpdateReservationRequest $request, string $id): JsonResponse
    {
        $data = $request->validated();

        unset($data['id']);

        if (!count($data)) {
            return response()->json([
                'success' => false,
                'message' => 'حداقل یک فیلد برای ویرایش ارسال کنید.',
            ], Response::HTTP_BAD_REQUEST);
        }

        $result = $this->reservationService->update($data, $id);

        return response()->json([
            'success' => $result,
            'message' => 'اطلاعات رزرو با موفقیت ویرایش شد.',
        ], Response::HTTP_OK);
    }

    public function destroy(DeleteReservationRequest $request): JsonResponse
    {
        $data = $request->validated();
        $id = $data['id'];

        $result = $this->reservationService->delete($id);

        return response()->json([
            'success' => $result,
            'message' => 'رزرو با موفقیت حذف شد.',
        ], Response::HTTP_OK);
    }
}
