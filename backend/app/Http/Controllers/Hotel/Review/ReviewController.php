<?php

namespace App\Http\Controllers\Hotel\Review;

use App\Http\Requests\Hotel\Review\CreateReviewRequest;
use App\Http\Requests\Hotel\Review\DeleteReviewRequest;
use App\Http\Requests\Hotel\Review\UpdateReviewRequest;
use App\Services\Hotel\Review\ReviewService;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

readonly class ReviewController
{
    public function __construct(private ReviewService $reviewService)
    {
    }

    public function index(): JsonResponse
    {
        $reviews = $this->reviewService->index();

        return response()->json([
            'success' => true,
            'data' => $reviews,
        ], Response::HTTP_OK);
    }

    public function store(CreateReviewRequest $request): JsonResponse
    {
        $data = $request->validated();

        $review = $this->reviewService->create($data);

        return response()->json([
            'success' => true,
            'message' => 'نظر کاربر با موفقیت ثبت شد.',
            'data' => $review,
        ], Response::HTTP_CREATED);
    }

    public function show(int $id): JsonResponse
    {
        $review = $this->reviewService->get($id);

        return response()->json([
            'success' => true,
            'data' => $review,
        ], Response::HTTP_OK);
    }

    public function update(UpdateReviewRequest $request, int $id): JsonResponse
    {
        $data = $request->validated();

        unset($data['id']);

        if (!count($data)) {
            return response()->json([
                'success' => false,
                'message' => 'حداقل یک فیلد برای ویرایش ارسال کنید.',
            ], Response::HTTP_BAD_REQUEST);
        }

        $result = $this->reviewService->update($data, $id);

        return response()->json([
            'success' => $result,
            'message' => 'نظر کاربر با موفقیت ویرایش شد.',
        ], Response::HTTP_OK);
    }

    public function destroy(DeleteReviewRequest $request): JsonResponse
    {
        $data = $request->validated();
        $id = $data['id'];

        $result = $this->reviewService->delete($id);

        return response()->json([
            'success' => $result,
            'message' => 'نظر کاربر با موفقیت حذف شد.',
        ], Response::HTTP_OK);
    }
}
