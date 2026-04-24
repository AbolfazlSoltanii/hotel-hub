<?php

namespace App\Repositories\Reservation;

use App\Models\Reservation\Reservation;
use App\Models\Reservation\ReservationStatus;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

readonly class ReservationRepository
{
    public function __construct(private Reservation $reservation)
    {
    }

    public function index(): Collection
    {
        return $this->reservation->all();
    }

    public function get(int $id)
    {
        return $this->reservation->query()->find($id);
    }

    public function create(array $data)
    {
        return $this->reservation->query()->create($data);
    }

    public function update(array $data, int $id): ?bool
    {
        return $this->reservation->query()
            ->find($id)
            ?->update($data);
    }

    public function delete(int $id): ?bool
    {
        return $this->reservation->query()
            ->find($id)
            ?->delete();
    }

    public function isRoomAvailable(int $roomId, string $checkIn, string $checkOut, ?int $reservationId): bool
    {
        return $this->reservation->query()
            ->where('room_id', $roomId)
            ->whereNotIn('reservation_status_id', [ReservationStatus::CANCELLED, ReservationStatus::COMPLETED])
            ->where(function ($query) use ($checkIn, $checkOut) {
                $query->where(function ($q) use ($checkIn, $checkOut) {
                    $q->where('check_in', '<', $checkOut)
                        ->where('check_out', '>', $checkIn);
                });
            })
            ->when(isset($reservationId), function (Builder $query) use ($reservationId) {
                $query->whereNot('id', $reservationId);
            })
            ->exists();
    }
}
