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
        Schema::create('room_images', static function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('room_id')->index()->comment('اتاق');

            $table->string('image_path')->comment('تصویر');
            $table->boolean('is_primary')->default(0)->comment('تصویر اصلی؟');
            $table->tinyInteger('sort_order')->default(1)->comment('ترتیب قرارگیری');

            $table->timestamps();

            $table->foreign('room_id')->references('id')->on('rooms')
                ->cascadeOnUpdate()->cascadeOnDelete();

            $table->comment('تصاویر اتاق');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_images');
    }
};
