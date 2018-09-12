<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    /*
     * @param receiver_id is the hostel account
     * @param payee_id can be the user.
     * */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('hostel_id');
            $table->unsignedInteger('room_id');
            $table->unsignedInteger('receiver_id');
            $table->unsignedInteger('payee_id');
            $table->unsignedBigInteger('booking_id')->unsigned();
            $table->decimal('service_fee',8,2);
            $table->decimal('myroommie_service_fee');
            $table->decimal('amount',8,2);
            $table->dateTime('transfer_on');
            $table->unsignedInteger('promo_code_id');
            $table->decimal('discounted_amount');
            $table->tinyInteger('status');
            $table->softDeletes();
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
        Schema::dropIfExists('transactions');
    }
}
