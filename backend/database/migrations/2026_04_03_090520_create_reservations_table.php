<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservations', static function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id')->index()->comment('کاربر');
            $table->unsignedBigInteger('room_id')->index()->comment('اتاق');
            $table->unsignedTinyInteger('reservation_status_id')->index()->comment('وضعیت رزرو');
            $table->unsignedTinyInteger('payment_status_id')->index()->comment('وضعیت پرداخت');

            $table->date('check_in')->index()->comment('تاریخ ورود');
            $table->date('check_out')->index()->comment('تاریخ خروج');
            $table->decimal('total_price', 20)->comment('مبلغ نهایی');
            $table->tinyInteger('guest_count')->nullable()->comment('تعداد مهمان');

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('room_id')->references('id')->on('rooms')
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('reservation_status_id')->references('id')->on('reservation_statuses')
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('payment_status_id')->references('id')->on('payment_statuses')
                ->cascadeOnUpdate()->cascadeOnDelete();

            $table->comment('رزروها');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
