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
            $table->string('name');
            $table->string('hostel_email')->nullable();
            $table->string('hostel_phone')->nullable();
            $table->string('alias')->nullable();
            $table->string('slug')->unique();
            $table->string('street_address');
            $table->string('city');
            $table->string('region')->nullable();
            $table->string('country')->nullable();
            $table->float('latitude',20,17)->nullable();
            $table->float('longitude',20,17)->nullable();
            $table->boolean('published')->default(false);
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
