<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelBookingRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_booking_rooms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("hotel_booking_id");
            $table->unsignedBigInteger("room_id");
            $table->date("from_date");
            $table->date("to_date");
            $table->integer("price");

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
        Schema::dropIfExists('hotel_booking_rooms');
    }
}
