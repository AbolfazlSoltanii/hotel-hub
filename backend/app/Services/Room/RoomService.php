<?php

namespace App\Services\Room;

use App\Repositories\Room\RoomRepository;
use Illuminate\Database\Eloquent\Collection;

readonly class RoomService
{
    public function __construct(private RoomRepository $roomRepository)
    {
    }

    public function index(): Collection
    {
        return $this->roomRepository->index();
    }

    public function get(int $id)
    {
        return $this->roomRepository->get($id);
    }

    public function create(array $data)
    {
        return $this->roomRepository->create($data);
    }

    public function update(array $data, int $id): ?bool
    {
        return $this->roomRepository->update($data, $id);
    }

    public function delete(int $id): ?bool
    {
        return $this->roomRepository->delete($id);
    }
}
