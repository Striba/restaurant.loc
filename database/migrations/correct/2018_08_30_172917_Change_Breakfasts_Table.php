<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeBreakfastsTable extends Migration
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
            $table->dropForeign(['reserves_id']);
            $table->renameColumn('reserves_id', 'reserve_id');
            $table->foreign('reserve_id')->references('id')->on('reserves');
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
