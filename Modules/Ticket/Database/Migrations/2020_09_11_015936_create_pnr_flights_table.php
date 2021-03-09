<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePnrFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pnr_flights', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('schedule_flight');
            $table->unsignedBigInteger('pnr_id');
            $table->string("class");
            $table->string("bag");
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
        Schema::dropIfExists('pnr_flights');
    }
}
