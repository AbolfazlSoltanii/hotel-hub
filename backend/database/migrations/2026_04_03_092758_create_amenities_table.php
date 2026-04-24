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
        Schema::create('amenities', static function (Blueprint $table) {
            $table->smallIncrements('id');

            $table->unsignedTinyInteger('amenity_category_id')->index()->comment('دسته بندی');

            $table->string('name', 100)->index()->comment('نام');
            $table->string('icon', 50)->nullable()->comment('آیکون');

            $table->timestamps();
            $table->softDeletes();

            $table->unique(['amenity_category_id', 'name', 'deleted_at']);

            $table->foreign('amenity_category_id')->references('id')->on('amenity_categories')
                ->cascadeOnUpdate()->cascadeOnDelete();

            $table->comment('امکانات');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('amenities');
    }
};
