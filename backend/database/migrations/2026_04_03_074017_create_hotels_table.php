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
        Schema::create('hotels', static function (Blueprint $table) {
            $table->id();

            $table->unsignedSmallInteger('city_id')->index()->comment('شهر');
            $table->unsignedBigInteger('manager_id')->index()->comment('مدیر');

            $table->string('name', 80)->comment('نام');
            $table->text('description')->nullable()->comment('توضیحات');
            $table->tinyInteger('stars')->default(1)->comment('تعداد ستاره');
            $table->string('address')->nullable()->comment('آدرس');
            $table->string('website', 200)->nullable()->comment('وب سایت');
            $table->string('phone', 20)->nullable()->comment('تلفن');
            $table->string('email', 100)->nullable()->comment('ایمیل');
            $table->string('logo')->nullable()->comment('لوگو');
            $table->boolean('is_active')->default(1)->comment('فعال است؟');
            $table->decimal('latitude', 10, 6)->nullable()->comment('عرض جغرافیایی');
            $table->decimal('longitude', 10, 6)->nullable()->comment('طول جغرافیایی');

            $table->timestamps();
            $table->softDeletes();

            $table->unique(['name', 'deleted_at']);
            $table->unique(['phone', 'deleted_at']);
            $table->unique(['email', 'deleted_at']);

            $table->foreign('city_id')->references('id')->on('cities')
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('manager_id')->references('id')->on('users')
                ->cascadeOnUpdate()->cascadeOnDelete();

            $table->comment('هتل ها');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
