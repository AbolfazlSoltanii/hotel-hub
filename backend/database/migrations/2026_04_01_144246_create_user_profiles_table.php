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
        Schema::create('user_profiles', static function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id')->index()->comment('کاربر');
            $table->unsignedTinyInteger('gender_id')->index()->nullable()->comment('جنسیت');

            $table->string('first_name', 100)->index()->comment('نام');
            $table->string('last_name', 150)->index()->comment('نام خانوادگی');
            $table->string('national_code', 10)->nullable()->comment('کدملی');
            $table->date('birth_date')->nullable()->comment('تاریخ تولد');
            $table->text('address')->nullable()->comment('آدرس');
            $table->string('avatar')->nullable()->comment('تصویر پروفایل');

            $table->timestamps();
            $table->softDeletes();

            $table->unique(['national_code', 'deleted_at']);

            $table->foreign('user_id')->references('id')->on('users')
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('gender_id')->references('id')->on('genders')
                ->cascadeOnUpdate()->cascadeOnDelete();

            $table->comment('اطلاعات پروفایل کاربران');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_profiles');
    }
};
