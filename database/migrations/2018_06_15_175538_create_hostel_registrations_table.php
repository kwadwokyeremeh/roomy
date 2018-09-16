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
            $table->unsignedInteger('hosteller_id');
            $table->foreign('hosteller_id')->references('id')->on('hostellers')->onDelete('cascade');
            $table->unsignedInteger('hostel_id');
            $table->foreign('hostel_id')->references('id')->on('hostels')->onDelete('cascade');
            $table->boolean('basic_info')->default(false);
            $table->boolean('hostel_details')->default(false);
            $table->boolean('add_media')->default(false);
            $table->boolean('amenities')->default(false);
            $table->boolean('layout_n_pricing')->default(false);
            $table->boolean('policies')->default(false);
            $table->boolean('payment')->default(false);
            $table->boolean('confirmation')->default(false);
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
