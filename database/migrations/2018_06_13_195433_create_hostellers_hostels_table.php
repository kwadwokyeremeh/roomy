<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHostellersHostelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hostellers_hostels', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->increments('hosteller_id')->unsigned()->index();
            $table->increments('hostel_id')->unsigned()->index();
            $table->foreign('hosteller_id')->references('id')
                ->on('hostellers')
                ->onDelete('cascade');
            $table->foreign('hostel_id')->references('id')
                ->on('hostellers')
                ->onDelete('cascade');
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
        Schema::dropIfExists('hostellers_hostels');
    }
}
