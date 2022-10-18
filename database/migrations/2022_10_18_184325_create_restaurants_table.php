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
            $table->string('website')->unique()->nullable();
            $table->string('phone')->unique()->nullable();
            $table->string('email')->unqiue()->nullable();
            $table->string('picture')->nullable();

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
