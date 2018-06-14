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

            $table->string('name')->nullable();
            $table->integer('number');
            $table->string('type');
            $table->char('sex',1)->nullable();
            $table->integer('number_of_beds');
            $table->boolean('status')->default(false);
            $table->integer('hostel_id')->unsigned();
            $table->integer('floor_id')->unsigned();
            $table->integer('block_id')->unsigned();
            $table->foreign('hostel_id')->references('id')->on('hostels')->onDetele('cascade');
            $table->foreign('block_id')->references('id')->on('blocks')->onDetele('cascade');
            $table->foreign('floor_id')->references('id')->on('floors')->onDetele('cascade');
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
