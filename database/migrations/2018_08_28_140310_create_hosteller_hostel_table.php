<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHostellerHostelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hosteller_hostel', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('hosteller_id');
            $table->unsignedInteger('hostel_id');
            $table->char('creation_state',7);
            $table->foreign('hosteller_id')->references('id')->on('hostellers')->onDelete('cascade');
            $table->foreign('hostel_id')->references('id')->on('hostels')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hosteller_hostel');
    }
}
