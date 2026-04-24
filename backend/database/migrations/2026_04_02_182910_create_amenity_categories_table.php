<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('amenity_categories', static function (Blueprint $table) {
            $table->tinyIncrements('id');

            $table->string('code', 50)->comment('کد');
            $table->string('title', 50)->comment('عنوان');

            $table->unique(['code', 'title']);

            $table->comment('دسته بندی امکانات');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('amenity_categories');
    }
};
