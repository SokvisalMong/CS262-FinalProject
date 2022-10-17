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
        Schema::create('admins', function (Blueprint $table) {
            $table->integer('admin_id')->autoIncrement();

            $table->string('admin_username', 100);
            $table->string('admin_email', 100)->unique();
            $table->string('admin_password');

            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
        });

        DB::table('admins')->insert([
            ['admin_username' => 'root', 'admin_email' => 'admin@email.com', 'admin_password' => bcrypt('password')]
        ]);
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
};
