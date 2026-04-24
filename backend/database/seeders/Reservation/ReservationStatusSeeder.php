<?php

namespace Database\Seeders\Reservation;

use App\Models\Reservation\ReservationStatus;
use Illuminate\Database\Seeder;

class ReservationStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = $this->getData();

        ReservationStatus::query()->insert($data);
    }

    private function getData(): array
    {
        return [
            [
                'id' => 1,
                'code' => 'pending',
                'title' => 'در انتظار',
            ],
            [
                'id' => 2,
                'code' => 'confirmed',
                'title' => 'تایید شده',
            ],
            [
                'id' => 3,
                'code' => 'cancelled',
                'title' => 'لغو شده',
            ],
            [
                'id' => 4,
                'code' => 'completed',
                'title' => 'تکمیل شده',
            ],
        ];
    }
}
