<?php

namespace Database\Seeders\User;

use App\Models\User\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = $this->getData();

        Role::query()->insert($data);
    }

    private function getData(): array
    {
        return [
            [
                'id' => 1,
                'code' => 'admin',
                'title' => 'مدیر سیستم',
            ],
            [
                'id' => 2,
                'code' => 'manager',
                'title' => 'مدیر هتل',
            ],
            [
                'id' => 3,
                'code' => 'user',
                'title' => 'کاربر عادی',
            ]
        ];
    }
}
