<?php

namespace Database\Seeders\Room;

use App\Models\Room\RoomStatus;
use Illuminate\Database\Seeder;

class RoomStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = $this->getData();

        RoomStatus::query()->insert($data);
    }

    private function getData(): array
    {
        return [
            [
                'id' => 1,
                'code' => 'available',
                'title' => 'در دسترس'
            ],
            [
                'id' => 2,
                'code' => 'occupied',
                'title' => 'اشغال شده'
            ],
            [
                'id' => 3,
                'code' => 'maintenance',
                'title' => 'در دست تعمیر'
            ],
        ];
    }
}
