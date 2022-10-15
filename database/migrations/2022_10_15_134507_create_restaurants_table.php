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
        Schema::create('restaurants', function (Blueprint $table) {
            $table->integer('restaurant_id')->autoIncrement();
            $table->string('restaurant_name', 100);
            $table->string('payment_options', 100);
            $table->string('hours_of_operation', 100);
            // $table->string('cuisines', 100);
            $table->string('dress_code', 100);
            $table->string('restuarant_website', 500);
            $table->string('restuarant_mobile', 100);
            $table->string('restuarant_email', 100);
            $table->integer('price_range_lower');
            $table->integer('price_range_higher');
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
        Schema::dropIfExists('restaurants');
    }
};
