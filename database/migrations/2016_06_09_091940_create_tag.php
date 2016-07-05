<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTag extends Migration
{
/**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tag');
            $table->string('slug')->unique();
            $table->boolean('del_flg')->default(0);
            $table->timestamps();
        });

        DB::table('tags')->insert([
            'tag' => "Pink",
            'slug' => "pink"
            ]);

        DB::table('tags')->insert([
            'tag' => "T-Shirt",
            'slug' => "t-shirt"
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tags');
    }
}
