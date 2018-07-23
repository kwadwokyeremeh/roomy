<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('hostel_id')->unsigned();
            $table->integer('block_id')->unsigned();
            $table->integer('floor_id')->unsigned();
            $table->unsignedInteger('room_description_id');
            $table->string('name')->nullable();
            $table->string('number');
            $table->char('sexType',1)->nullable();
            $table->boolean('status')->default(false);
            $table->foreign('hostel_id')->references('id')->on('hostels')->onDelete('cascade');
            $table->foreign('block_id')->references('id')->on('blocks')->onDelete('cascade');
            $table->foreign('floor_id')->references('id')->on('floors')->onDelete('cascade');
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
        Schema::dropIfExists('rooms');
    }
}
