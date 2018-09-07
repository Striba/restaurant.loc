<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeTbaleBreakfasts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('breakfasts', function (Blueprint $table) {
            //
            $table->integer('reserves_id')->unsigned()->nullable();
            $table->foreign('reserves_id')->references('id')->on('reserves');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('breakfasts', function (Blueprint $table) {
            //
        });
    }
}
