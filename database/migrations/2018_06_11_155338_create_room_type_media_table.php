<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomTypeMediaTable extends Migration
{
    /**
     * Run the migrations.
     * This schema is for the images associated
     * with each room type
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_type_media', function (Blueprint $table) {
            $table->increments('id');
            /*$table->integer('hostel_id')->unsigned();*/
            $table->integer('room_description_id')->unsigned();
            /*$table->string('room_type');*/
            $table->string('image');
            /*$table->foreign('hostel_id')->references('id')->on('hostels')->onDelete('cascade');*/
            $table->foreign('room_description_id')->references('id')->on('room_descriptions')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_type_media');
    }
}
