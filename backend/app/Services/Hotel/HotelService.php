<?php

namespace App\Services\Hotel;

use App\Repositories\Hotel\HotelRepository;
use Illuminate\Database\Eloquent\Collection;

readonly class HotelService
{
    public function __construct(
        private HotelRepository $hotelRepository
    )
    {
    }

    public function index(): Collection
    {
        return $this->hotelRepository->index();
    }

    public function get(int $id)
    {
        return $this->hotelRepository->get($id);
    }

    public function create(array $data)
    {
        return $this->hotelRepository->create($data);
    }

    public function update(array $data, int $id): ?bool
    {
        return $this->hotelRepository->update($data, $id);
    }

    public function delete(int $id): ?bool
    {
        return $this->hotelRepository->delete($id);
    }
}
