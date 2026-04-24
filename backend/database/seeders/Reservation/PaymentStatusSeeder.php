<?php

namespace Database\Seeders\Reservation;

use App\Models\Reservation\PaymentStatus;
use Illuminate\Database\Seeder;

class PaymentStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = $this->getData();

        PaymentStatus::query()->insert($data);
    }

    private function getData(): array
    {
        return [
            [
                'id' => 1,
                'code' => 'unpaid',
                'title' => 'پرداخت نشده',
            ],
            [
                'id' => 2,
                'code' => 'paid',
                'title' => 'پرداخت شده',
            ],
            [
                'id' => 3,
                'code' => 'refunded',
                'title' => 'بازگشت داده شده',
            ],
        ];
    }
}
