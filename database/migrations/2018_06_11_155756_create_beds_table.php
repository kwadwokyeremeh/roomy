<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hostel_id')->unsigned();
            $table->foreign('hostel_id')->references('id')->on('hostels')->onDelete('cascade');
            $table->integer('block_id')->unsigned();
            $table->foreign('block_id')->references('id')->on('blocks')->onDelete('cascade');
            $table->integer('floor_id')->unsigned();
            $table->foreign('floor_id')->references('id')->on('floors')->onDelete('cascade');
            $table->integer('room_id')->unsigned();
            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->boolean('status')->default(false);
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beds');
    }
}
