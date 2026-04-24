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
        Schema::create('hotel_amenities', static function (Blueprint $table) {
            $table->integerIncrements('id');

            $table->unsignedBigInteger('hotel_id')->index()->comment('هتل');
            $table->unsignedSmallInteger('amenity_id')->index()->comment('امکان');

            $table->unique(['hotel_id', 'amenity_id']);

            $table->foreign('hotel_id')->references('id')->on('hotels')
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('amenity_id')->references('id')->on('amenities')
                ->cascadeOnUpdate()->cascadeOnDelete();

            $table->comment('امکانات هتل');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotel_amenities');
    }
};
