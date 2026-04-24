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
        Schema::create('reviews', static function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id')->index()->comment('کاربر');
            $table->unsignedBigInteger('hotel_id')->index()->comment('هتل');

            $table->tinyInteger('rating')->comment('امتیاز (1 تا 5)');
            $table->text('comment')->nullable()->comment('نظر کاربر');

            $table->timestamps();
            $table->softDeletes();

            $table->unique(['user_id', 'hotel_id', 'deleted_at']);

            $table->foreign('user_id')->references('id')->on('users')
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('hotel_id')->references('id')->on('hotels')
                ->cascadeOnUpdate()->cascadeOnDelete();

            $table->comment('نظرات');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
