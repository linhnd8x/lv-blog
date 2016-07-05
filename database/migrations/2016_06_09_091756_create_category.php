<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category');
            $table->string('slug')->unique();
            $table->boolean('del_flg')->default(0);
            $table->timestamps();
        });

        DB::table('categories')->insert([
            'category' => "WOMEN",
            'slug' => "women"
        ]);

        DB::table('categories')->insert([
            'category' => "MEN",
            'slug' => "men"
        ]);

        DB::table('categories')->insert([
            'category' => "KIDS",
            'slug' => "kids"
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('categories');
    }
}
