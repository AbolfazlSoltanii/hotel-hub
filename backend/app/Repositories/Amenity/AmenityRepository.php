<?php

namespace App\Repositories\Amenity;

use App\Models\Amenity\Amenity;
use Illuminate\Database\Eloquent\Collection;

readonly class AmenityRepository
{
    public function __construct(private Amenity $amenity)
    {
    }

    public function index(): Collection
    {
        return $this->amenity->all();
    }

    public function get(int $id)
    {
        return $this->amenity->query()->find($id);
    }

    public function create(array $data)
    {
        return $this->amenity->query()->create($data);
    }

    public function update(array $data, int $id): ?bool
    {
        return $this->amenity->query()
            ->find($id)
            ?->update($data);
    }

    public function delete(int $id): ?bool
    {
        return $this->amenity->query()
            ->find($id)
            ?->delete();
    }
}
