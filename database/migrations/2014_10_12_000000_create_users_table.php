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
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            // Required
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone')->unique();
            
            // Nullables
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        // Inserts default user
        DB::table('users')->insert([[
            'name' => 'Johnny',
            'email' => 'john@email.com',
            'password' => bcrypt('password'),
            'phone' => '012345678',
            'firstname' => 'John',
            'lastname' => 'Sins',
        ]]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
