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
            'name' => 'restaurant',
            'payment' => 'Cash',
            'hoo' => '6AM - 6PM',
            'cuisines' => 'Khmer',
            'dress_code' => 'Casual',
            'price_lower' => 5,
            'price_higher' => 10,

            'description' => 'text',
            'website' => 'www.site.com',
            'phone' => '012345678',
            'email' => 'restaurant@email.com',
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
