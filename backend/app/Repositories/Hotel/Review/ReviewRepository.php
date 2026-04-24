<?php

namespace App\Repositories\Hotel\Review;

use App\Models\Hotel\Review;
use Illuminate\Database\Eloquent\Collection;

readonly class ReviewRepository
{
    public function __construct(private Review $review)
    {
    }

    public function index(): Collection
    {
        return $this->review->all();
    }

    public function get(int $id)
    {
        return $this->review->query()->find($id);
    }

    public function create(array $data)
    {
        return $this->review->query()->create($data);
    }

    public function update(array $data, int $id): ?bool
    {
        return $this->review->query()
            ->find($id)
            ?->update($data);
    }

    public function delete(int $id): ?bool
    {
        return $this->review->query()
            ->find($id)
            ?->delete();
    }
}
