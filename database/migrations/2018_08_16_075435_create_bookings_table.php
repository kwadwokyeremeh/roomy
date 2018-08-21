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
            $table->unsignedInteger('reservation_id')->nullable()->default(null);
            $table->unsignedInteger('hostel_id')->nullable()->default(null);
            $table->unsignedInteger('room_id')->nullable()->default(null);
            $table->unsignedInteger('payment_method_id')->nullable()->default(null);
            $table->decimal('tax_paid',8,2)->nullable();
            $table->decimal('services_fee',8,2);
            $table->decimal('price',8,2);
            $table->decimal('amount_paid',8,2);
            $table->boolean('is_refund')->default(false);
            $table->decimal('amount_refunded',8,2)->nullable();
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->unsignedInteger('user_id')->nullable()->default(null);
            $table->tinyInteger('status');
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('reservation_id')->references('id')->on('reservations')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('hostel_id')->references('id')->on('hostels')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('room_id')->references('id')->on('rooms')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('payment_method_id')->references('id')->on('payment_methods')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');
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
