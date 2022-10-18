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
            $table->integer('owner_id');
            $table->foreign('owner_id')->references('owner_id')->on('owners');
            // $table->foreignId('owner_id')->constrained('owners', 'owner_id');

            $table->string('restaurant_name', 100);
            $table->set('payment_options', ['Cash', 'Visa', 'Mastercard', 'ABA']);
            $table->string('hours_of_operation', 100);
            $table->set('cuisines', ['Khmer', 'Western', 'Chinese', 'Vietnamese', 'Internatonal']);
            $table->set('dress_code', ['Casual', 'Business Casual', 'Casual Elegant', 'Formal', 'Jacket']);
            $table->string('restaurant_website', 500)->nullable();
            $table->string('restaurant_mobile', 100)->nullable();
            $table->string('restaurant_email', 100)->nullable();
            $table->integer('price_range_lower');
            $table->integer('price_range_higher');
            $table->string('restaurant_pic')->nullable();

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
