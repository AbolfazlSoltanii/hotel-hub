<?php

namespace Database\Seeders\Room;

use App\Models\Room\RoomType;
use Illuminate\Database\Seeder;

class RoomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = $this->getData();

        RoomType::query()->insert($data);
    }

    private function getData(): array
    {
        return [
            [
                'id' => 1,
                'code' => 'standard',
                'title' => 'معمولی'
            ],
            [
                'id' => 2,
                'code' => 'deluxe',
                'title' => 'لوکس'
            ],
            [
                'id' => 3,
                'code' => 'suite',
                'title' => 'سوئیت'
            ],
            [
                'id' => 4,
                'code' => 'vip',
                'title' => 'ویژه'
            ],
        ];
    }
}
