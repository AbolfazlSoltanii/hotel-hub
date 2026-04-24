<?php

namespace App\Services\Hotel\Review;

use App\Repositories\Hotel\Review\ReviewRepository;
use Illuminate\Database\Eloquent\Collection;

readonly class ReviewService
{
    public function __construct(private ReviewRepository $reviewRepository)
    {
    }

    public function index(): Collection
    {
        return $this->reviewRepository->index();
    }

    public function get(int $id)
    {
        return $this->reviewRepository->get($id);
    }

    public function create(array $data)
    {
        return $this->reviewRepository->create($data);
    }

    public function update(array $data, int $id): ?bool
    {
        return $this->reviewRepository->update($data, $id);
    }

    public function delete(int $id): ?bool
    {
        return $this->reviewRepository->delete($id);
    }
}
