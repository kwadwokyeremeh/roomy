<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFloorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('floors', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('hostel_id')->unsigned();
            $table->foreign('hostel_id')->references('id')->on('hostels')->onDelete('cascade');
            $table->integer('block_id')->unsigned();
            $table->foreign('block_id')->references('id')->on('blocks')->onDelete('cascade');
            $table->string('name')->nullable();
            $table->integer('number');
            $table->integer('number_of_rooms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('floors');
    }
}
