<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHostelRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hostel_registrations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hosteller_id')->unsigned();
            $table->foreign('hosteller_id')->references('id')->on('hostellers')->onDelete('cascade');
            $table->boolean('1_basic_info')->default(false);
            $table->boolean('2_hostel_details')->default(false);
            $table->boolean('3_add_media')->default(false);
            $table->boolean('4_amenities')->default(false);
            $table->boolean('5_layout_n_pricing')->default(false);
            $table->boolean('6_policies')->default(false);
            $table->boolean('7_payment')->default(false);
            $table->boolean('8_confirmation')->default(false);
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
        Schema::dropIfExists('hostel_registrations');
    }
}
