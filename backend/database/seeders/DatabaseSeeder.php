<?php

namespace Database\Seeders;

use Database\Seeders\Room\RoomStatusSeeder;
use Database\Seeders\Room\RoomTypeSeeder;
use Database\Seeders\User\GenderSeeder;
use Database\Seeders\User\RoleSeeder;
use Database\Seeders\User\UserStatusSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserStatusSeeder::class,
            GenderSeeder::class,
            ProvinceSeeder::class,
            CitySeeder::class,
            RoomStatusSeeder::class,
            RoomTypeSeeder::class,
        ]);
    }
}
