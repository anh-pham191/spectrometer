<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKiwifruitImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kiwifruit_images', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kiwifruit_id')->unsigned();
            $table->foreign('kiwifruit_id')->references('id')->on('kiwifruits');
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
        Schema::dropIfExists('kiwifruit_images');
    }
}
