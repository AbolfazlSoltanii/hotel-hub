<?php

namespace App\Services\Amenity;

use App\Repositories\Amenity\AmenityRepository;
use Illuminate\Database\Eloquent\Collection;

readonly class AmenityService
{
    public function __construct(private AmenityRepository $amenityRepository)
    {
    }

    public function index(): Collection
    {
        return $this->amenityRepository->index();
    }

    public function get(int $id)
    {
        return $this->amenityRepository->get($id);
    }

    public function create(array $data)
    {
        return $this->amenityRepository->create($data);
    }

    public function update(array $data, int $id): ?bool
    {
        return $this->amenityRepository->update($data, $id);
    }

    public function delete(int $id): ?bool
    {
        return $this->amenityRepository->delete($id);
    }
}
