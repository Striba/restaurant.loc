<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserves', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',255);
            $table->string('alias',150)->unique();
            $table->float('price');
            $table->integer('qty');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('desserts_id')->unsigned()->nullable();
            $table->foreign('desserts_id')->references('id')->on('desserts');
            $table->integer('drinks_id')->unsigned()->nullable();
            $table->foreign('drinks_id')->references('id')->on('drinks');
            $table->integer('first_dishes_id')->unsigned()->nullable();
            $table->foreign('first_dishes_id')->references('id')->on('first_dishes');
            $table->integer('breakfasts_id')->unsigned()->nullable();
            $table->foreign('breakfasts_id')->references('id')->on('breakfasts');
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
        Schema::drop('reserves');
    }
}
