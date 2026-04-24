<?php

namespace Database\Seeders\Amenity;

use App\Models\Amenity\AmenityCategory;
use Illuminate\Database\Seeder;

class AmenityCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = $this->getData();

        AmenityCategory::query()->insert($data);
    }

    private function getData(): array
    {
        return [
            [
                'id' => 1,
                'code' => 'hotel',
                'title' => 'هتل'
            ],
            [
                'id' => 2,
                'code' => 'room',
                'title' => 'اتاق'
            ],
            [
                'id' => 3,
                'code' => 'parking',
                'title' => 'پارکینگ'
            ],
            [
                'id' => 4,
                'code' => 'restaurant',
                'title' => 'رستوران'
            ],
        ];
    }
}
