<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAttributeToScannedItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('scanned_items', function (Blueprint $table) {
            $table->text('cut_location');
            $table->text('other_information');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('scanned_items', function (Blueprint $table) {
            $table->dropColumn('cut_location');
            $table->dropColumn('other_information');
        });
    }
}
