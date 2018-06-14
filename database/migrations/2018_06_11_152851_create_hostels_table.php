<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHostelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hostels', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hosteller_id')->unsigned();
            $table->string('name');
            $table->string('slug')->nullable();
            $table->integer('number_of_blocks');
            $table->string('street_address')->nullable();
            $table->string('town')->nullable();
            $table->string('region')->nullable();
            $table->string('country')->nullable();
            $table->string('map_link')->nullable();
            $table->boolean('status')->default(false);
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
        Schema::dropIfExists('hostels');
    }
}
