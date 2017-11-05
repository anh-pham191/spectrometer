<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKiwifruitScannedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kiwifruit_scanned', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kiwifruit_id')->unsigned();
            $table->foreign('kiwifruit_id')->references('id')->on('kiwifruits');
            $table->integer('sample');
            $table->string('area');
            $table->integer('scan');
            $table->float('calories');
            $table->float('carbs');
            $table->float('water');
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
        Schema::dropIfExists('kiwifruit_scanned');
    }
}
