<?php

namespace App\Http\Controllers\User\Gender;

use App\Services\User\GenderService;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

readonly class GenderController
{
    public function __construct(
        private GenderService $genderService
    )
    {
    }

    public function index(): JsonResponse
    {
        $genders = $this->genderService->index();

        return response()->json([
            'success' => true,
            'data' => $genders,
        ], Response::HTTP_OK);
    }
}
