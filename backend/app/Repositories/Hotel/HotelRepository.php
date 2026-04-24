<?php

namespace App\Repositories\Hotel;

use App\Models\Hotel\Hotel;
use Illuminate\Database\Eloquent\Collection;

readonly class HotelRepository
{
    public function __construct(
        private Hotel $hotel
    )
    {
    }

    public function index(): Collection
    {
        return $this->hotel->all();
    }

    public function get(int $id)
    {
        return $this->hotel->query()->find($id);
    }

    public function create(array $data)
    {
        return $this->hotel->query()->create($data);
    }

    public function update(array $data, int $id): ?bool
    {
        return $this->hotel->query()
            ->find($id)
            ?->update($data);
    }

    public function delete(int $id): ?bool
    {
        return $this->hotel->query()
            ->find($id)
            ?->delete();
    }
}
