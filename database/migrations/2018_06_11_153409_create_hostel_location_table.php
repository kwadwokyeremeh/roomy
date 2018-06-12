<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHostelLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hostel_location', function (Blueprint $table) {
            $table->increments('id');
            $table->string('street_address');
            $table->string('town');
            $table->string('region');
            $table->string('country');
            $table->integer('hostel_id')->unsigned();
            $table->string('map_link');
            $table->foreign('hostel_id')->references('id')
                ->on('hostels')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hostel_location');
    }
}
