<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationSectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_sectors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('airport_from_id');
            $table->unsignedBigInteger('airport_to_id');
            $table->string('departure_date');
            $table->string('class');
            $table->unsignedBigInteger('flight_id');

            $table->unsignedBigInteger('reservation_id');

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
        Schema::dropIfExists('reservation_sectors');
    }
}
