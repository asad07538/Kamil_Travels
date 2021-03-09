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
            $table->id();
            $table->string("code");
            $table->date("date")->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedBigInteger("created_by")->nullable();
            $table->unsignedBigInteger("customer_id")->nullable();
            $table->integer("total_amount")->default(0);
            $table->integer("discount")->default(0);
            $table->integer("extra")->default(0);
            $table->integer("total_receivable")->default(0);
            $table->integer("received_amount")->default(0);
            $table->string("status")->default("draft");
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
        Schema::dropIfExists('bookings');
    }
}
