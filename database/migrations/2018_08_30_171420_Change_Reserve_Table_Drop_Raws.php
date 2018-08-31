<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeReserveTableDropRaws extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reserves', function (Blueprint $table) {
            //
            $table->dropForeign(['first_dishes_id']);
            $table->dropForeign(['desserts_id']);
            $table->dropForeign(['drinks_id']);
            $table->dropForeign(['user_id']);
            $table->dropColumn('first_dishes_id');
            $table->dropColumn('desserts_id');
            $table->dropColumn('drinks_id');
            $table->dropColumn('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reserves', function (Blueprint $table) {
            //
        });
    }
}
