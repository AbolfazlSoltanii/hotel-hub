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
        Schema::create('user_roles', static function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id')->index()->comment('کاربر');
            $table->unsignedTinyInteger('role_id')->index()->comment('نقش');

            $table->foreign('user_id')->references('id')->on('users')
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('role_id')->references('id')->on('roles')
                ->cascadeOnUpdate()->cascadeOnDelete();

            $table->comment('نقش های کاربران');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_roles');
    }
};
