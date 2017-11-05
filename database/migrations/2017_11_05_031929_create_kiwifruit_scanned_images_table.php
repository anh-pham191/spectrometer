<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKiwifruitScannedImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kiwifruit_scanned_images', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kiwifruit_scanned_id')->unsigned();
            $table->foreign('kiwifruit_scanned_id')->references('id')->on('kiwifruit_scanned');
            $table->string('image');
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
        Schema::dropIfExists('kiwifruit_scanned_images');
    }
}
