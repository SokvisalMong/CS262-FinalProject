<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->id();

            // Foreign Keys
            $table->foreignId('restaurant_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // Required
            $table->enum('status', ['Active', 'Canceled', 'Completed']);
            $table->date('date');
            $table->time('time');
            $table->integer('size');

            $table->timestamps();

        });
        
        DB::table('bookings')->insert([[
            'restaurant_id' => 1,
            'user_id' => 1,
            'status' => 'Active',
            'date' => '2022-10-20',
            'time' => '18:30:15',
            'size' => 5
        ]]);
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
