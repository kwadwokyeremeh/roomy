<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHostelViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hostel_views', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hostel_id')->unsigned();
            $table->string('front',255);
            $table->string('right',255);
            $table->string('left',255);
            $table->string('video',255)->nullable();
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
        Schema::dropIfExists('hostel_views');
    }
}
