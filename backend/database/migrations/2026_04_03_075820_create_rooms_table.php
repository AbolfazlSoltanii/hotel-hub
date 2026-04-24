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
        Schema::create('rooms', static function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('hotel_id')->index()->comment('هتل');
            $table->unsignedTinyInteger('room_status_id')->index()->comment('وضعیت اتاق');
            $table->unsignedTinyInteger('room_type_id')->index()->comment('نوع اتاق');

            $table->string('name', 80)->index()->comment('نام');
            $table->integer('number')->nullable()->index()->comment('شماره اتاق');
            $table->tinyInteger('floor')->nullable()->comment('طبقه');
            $table->tinyInteger('capacity')->default(1)->comment('ظرفیت');
            $table->decimal('price_per_night', 15)->comment('مبلغ به ازای هر شب');
            $table->text('description')->nullable()->comment('توضیحات');

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('hotel_id')->references('id')->on('hotels')
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('room_status_id')->references('id')->on('room_statuses')
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('room_type_id')->references('id')->on('room_types')
                ->cascadeOnUpdate()->cascadeOnDelete();

            $table->comment('اتاق ها');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
