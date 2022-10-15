<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->interger('booking_id')->autoIncrement();
            $table->foreignId('restaurant_id')
                    ->constrained('restaurants')
                    ->cascadeOnUpdate()
                    ->cascadeOnDelete();
            $table->string('booking_status', 100);
            $table->string('booking_date', 100);
            $table->int('party_size');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};
