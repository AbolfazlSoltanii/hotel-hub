<?php

namespace Database\Seeders\User;

use App\Models\User\UserStatus;
use Illuminate\Database\Seeder;

class UserStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = $this->getData();

        UserStatus::query()->insert($data);
    }

    private function getData(): array
    {
        return [
            [
                'id' => 1,
                'code' => 'active',
                'title' => 'فعال',
            ],
            [
                'id' => 2,
                'code' => 'deactived',
                'title' => 'غیرفعال',
            ],
            [
                'id' => 3,
                'code' => 'banned',
                'title' => 'مسدود شده',
            ]
        ];
    }
}
