<?php

namespace App\Repositories\Room;

use App\Models\Room\Room;
use Illuminate\Database\Eloquent\Collection;

readonly class RoomRepository
{
    public function __construct(private Room $room)
    {
    }

    public function index(): Collection
    {
        return $this->room->all();
    }

    public function get(int $id)
    {
        return $this->room->query()->find($id);
    }

    public function create(array $data)
    {
        return $this->room->query()->create($data);
    }

    public function update(array $data, int $id): ?bool
    {
        return $this->room->query()
            ->find($id)
            ?->update($data);
    }

    public function delete(int $id): ?bool
    {
        return $this->room->query()
            ->find($id)
            ?->delete();
    }
}
