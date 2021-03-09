<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_bookings', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('booking_id');
            $table->unsignedBigInteger('car_id')->nullable();
            $table->unsignedBigInteger('driver_id')->nullable();
            $table->unsignedBigInteger('company_id')->nullable();
            $table->unsignedBigInteger('sector_id')->nullable();

            $table->date('traveling_date');
            $table->time('traveling_time');
            $table->date('arrival_date');            
            $table->time('arrival_time');

            $table->integer('available_seats')->default(0);
            $table->integer('reserved_seats')->default(0);

            $table->integer('advance')->default(0);
            $table->integer('reference')->default(0);
// expances
            $table->integer('fuel')->default(0);
            $table->integer('com_driver')->default(0);
            $table->integer('tools')->default(0);
            $table->integer('other_expances')->default(0);
            $table->integer('total_expances')->default(0);
// income
            $table->integer('income')->default(0);

//receipts
            $table->integer('advance_received_by_office')->default(0);
            $table->integer('received_from_driver')->default(0);
// balance
            $table->integer('remaining_balance')->default(0);
            $table->integer('total_received')->default(0);

            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('car_bookings');
    }
}
