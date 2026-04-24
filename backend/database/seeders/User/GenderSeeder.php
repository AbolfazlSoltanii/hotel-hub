<?php

namespace Database\Seeders\User;

use App\Models\User\Gender;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = $this->getData();

        Gender::query()->insert($data);
    }

    private function getData(): array
    {
        return [
            [
                'id' => 1,
                'code' => 'male',
                'title' => 'مرد',
            ],
            [
                'id' => 2,
                'code' => 'female',
                'title' => 'زن',
            ]
        ];
    }
}
