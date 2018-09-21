<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservesDishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserves_dishes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reserves_id')->unsigned()->default(1);
            $table->foreign('reserves_id')->references('id')->on('reserves');
            $table->integer('dishes_id')->unsigned()->default(1);
            $table->foreign('dishes_id')->references('id')->on('dishes');
            $table->string('title');
            $table->string('alias');
            $table->integer('qty')->unsigned()->default(1);
            $table->integer('amount')->unsigned();
            $table->float('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reserves_dishes');
    }
}
