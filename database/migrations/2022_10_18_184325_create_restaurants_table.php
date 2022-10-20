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
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();

            // Foreign Keys
            $table->foreignId('owner_id')->constrained()->onDelete('cascade');

            // Required
            $table->string('name')->unique();
            $table->set('payment', ['Cash', 'Visa', 'Mastercard', 'ABA']);
            $table->text('hoo');
            $table->set('cuisines', ['Khmer', 'Western', 'Chinese', 'Vietnamese', 'International']);            
            $table->set('dress_code', ['Casual', 'Business Casual', 'Casual Elegant', 'Formal', 'Jacket']);
            $table->integer('price_lower');
            $table->integer('price_higher');

            // Nullable
            $table->text('description')->nullable();
            $table->string('website')->unique()->nullable();
            $table->string('phone')->unique()->nullable();
            $table->string('email')->unqiue()->nullable();
            $table->string('picture')->nullable();

            $table->timestamps();
        });

        DB::table('restaurants')->insert([[
            'owner_id' => 1,
            'name' => 'McDonalds',
            'payment' => 'Cash',
            'hoo' => '7AM - 6PM',
            'cuisines' => 'Western',
            'dress_code' => 'Casual',
            'price_lower' => 5,
            'price_higher' => 10,

            'description' => "McDonald's Corporation is an American-based multinational fast food chain, founded in 1940 as a restaurant operated by Richard and Maurice McDonald, in San Bernardino, California, United States.",
            'website' => 'www.mcdonalds.com',
            'phone' => '012345678',
            'email' => 'mcdonalds@email.com',
        ]]);
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
