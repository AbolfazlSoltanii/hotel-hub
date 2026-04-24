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
        Schema::create('users', static function (Blueprint $table) {
            $table->id();

            $table->unsignedTinyInteger('user_status_id')->index()->comment('وضعیت');

            $table->string('email', 50)->comment('ایمیل');
            $table->string('phone', 11)->comment('شماره تلفن');
            $table->string('password')->comment('گذرواژه');
            $table->timestamp('email_verified_at')->nullable()->comment('زمان تایید کاربر');
            $table->string('remember_token', 100)->nullable()->comment('توکن یادآوری برای ورود خودکار');

            $table->timestamps();
            $table->softDeletes();

            $table->unique(['email', 'deleted_at']);
            $table->unique(['phone', 'deleted_at']);

            $table->foreign('user_status_id')->references('id')->on('user_statuses')
                ->cascadeOnUpdate()->cascadeOnDelete();

            $table->comment('کاربران');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
