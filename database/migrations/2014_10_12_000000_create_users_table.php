<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->enum('role',['admin','author','subscriber'])->default('author');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('del_flg')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
        DB::table('users')->insert([
            'name' => "Jack",
            'email' => 'duylinh89@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('123456')
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
