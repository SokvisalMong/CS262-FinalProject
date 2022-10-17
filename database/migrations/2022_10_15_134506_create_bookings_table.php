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
            // $table->foreignId('restaurant_id')
            //         ->constrained('restaurants')
            //         ->cascadeOnUpdate()
            //         ->cascadeOnDelete();
            // $table->foreign('booking_id')->references('id')->on('restaurants');
            // $table->foreignId('restaurant_id')->constrained()->onDelete('cascade');

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
