<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('hostel_id');
            $table->unsignedInteger('room_id');
            $table->unsignedInteger('payment_method_id');
            $table->decimal('tax_paid',8,2)->nullable();
            $table->decimal('services_fee',8,2);
            $table->decimal('price',8,2);
            $table->decimal('amount_paid',8,2);
            $table->boolean('is_refund')->default(false);
            $table->decimal('amount_refunded',8,2)->nullable();
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->unsignedInteger('user_id');
            $table->tinyInteger('status');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('hostel_id')->references('id')->on('hostels');
            $table->foreign('room_id')->references('id')->on('rooms');
            $table->foreign('payment_method_id')->references('id')->on('payment_methods');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
