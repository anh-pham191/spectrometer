<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddScannedItemToTempLambTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('temp_lambs', function (Blueprint $table) {
            $table->integer('scanned_item_id')->unsigned();
            $table->foreign('scanned_item_id')->references('id')->on('scanned_items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropColumn('scanned_item_id');
    }
}
