<?php

namespace App\Services\Reservation;

use App\Repositories\Reservation\ReservationRepository;
use Illuminate\Database\Eloquent\Collection;

readonly class ReservationService
{
    public function __construct(private ReservationRepository $reservationRepository)
    {
    }

    public function index(): Collection
    {
        return $this->reservationRepository->index();
    }

    public function get(int $id)
    {
        return $this->reservationRepository->get($id);
    }

    public function create(array $data)
    {
        return $this->reservationRepository->create($data);
    }

    public function update(array $data, int $id): ?bool
    {
        return $this->reservationRepository->update($data, $id);
    }

    public function delete(int $id): ?bool
    {
        return $this->reservationRepository->delete($id);
    }

    public function isRoomAvailable(int $roomId, string $checkIn, string $checkOut, ?int $reservationId = null): bool
    {
        return $this->reservationRepository->isRoomAvailable($roomId, $checkIn, $checkOut, $reservationId);
    }
}
