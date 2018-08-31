<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameColumnsTableReserves extends Migration
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
            //$table->dropForeign(['breakfasts_id', 'first_dishes_id', 'drinks_id', 'desserts_id']);
            $table->dropForeign(['breakfasts_id']);

            $table->renameColumn('breakfasts_id','breakfast_id');
            //$table->renameColumn('first_dishes_id','first_dish_id');
            //$table->renameColumn('drinks_id','drink_id');
            //$table->renameColumn('desserts_id', 'dessert_id');
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
