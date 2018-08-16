<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('token');
            $table->unsignedInteger('hostel_id');
            $table->unsignedInteger('room_id');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->decimal('amount_to_be_paid',8,2);
            $table->unsignedInteger('payment_method_id');
            $table->unsignedInteger('user_id');
            $table->tinyInteger('status');
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('hostel_id')->references('id')->on('hostels')->onDelete('cascade');
            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('null');
            $table->foreign('payment_method_id')->references('id')->on('payment_method')->onDelete('null');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
