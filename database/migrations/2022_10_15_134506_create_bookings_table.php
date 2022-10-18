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
            $table->integer('booking_id')->autoIncrement();
            $table->integer('restaurant_id');
            $table->foreign('restaurant_id')->references('restaurant_id')->on('restaurants');
            $table->integer('user_id');
            $table->foreign('user_id')->references('user_id')->on('users');

            $table->enum('booking_status', ['Active', 'Canceled', 'Completed']);
            $table->date('booking_date');
            $table->time('booking_time');
            $table->integer('party_size');

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
