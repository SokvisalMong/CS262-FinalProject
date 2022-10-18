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
        Schema::create('owners', function (Blueprint $table) {
            $table->integer('owner_id')->autoIncrement();

            $table->string('owner_email', 100)->unique();
            $table->string('owner_firstname', 100)->nullable();
            $table->string('owner_lastname', 100)->nullable();
            $table->string('owner_password');
            $table->string('owner_mobile', 100)->unique();

            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
        });

        DB::table('owners')->insert([
            ['owner_email' => 'owner@email.com', 'owner_password' => bcrypt('password'), 'owner_mobile' => '012345678']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('owners');
    }
};
