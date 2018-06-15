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
            $table->foreign('hostel_id')->references('id')->on('hostels')->onDelete('cascade');
            $table->integer('block_id')->unsigned();
            $table->foreign('block_id')->references('id')->on('blocks')->onDelete('cascade');
            $table->integer('floor_id')->unsigned();
            $table->foreign('floor_id')->references('id')->on('floors')->onDelete('cascade');
            $table->string('name')->nullable();
            $table->integer('number');
            $table->string('type');
            $table->char('sexType',1)->nullable();
            $table->integer('number_of_beds');
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
        Schema::dropIfExists('rooms');
    }
}
