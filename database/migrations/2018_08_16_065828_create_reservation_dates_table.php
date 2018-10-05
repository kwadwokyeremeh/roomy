<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateReservationDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_dates', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('hostel_id');
            //$table->year('academic_year');
            $table->tinyInteger('reservation_duration')->nullable();
            $table->dateTime('reservation_start_date')->nullable();
            $table->dateTime('reservation_end_date')->nullable();
            $table->dateTime('booking_start_date')->nullable();
            $table->dateTime('booking_end_date')->nullable();
            $table->timestamps();

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
        Schema::dropIfExists('reservation_dates');
    }
}
