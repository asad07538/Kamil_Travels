<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePnrPaxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pnr_paxes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('person_id')->nullable();
            $table->unsignedBigInteger('pnr_id');
            $table->unsignedBigInteger('fare_id')->nullable();
            $table->string('pax_type')->nullable();
            $table->string('contact_info')->nullable();
            $table->string('current_adult')->nullable();
            $table->string('passport')->nullable();
            $table->string('passport_type')->nullable();
            $table->string('member_id')->nullable();

            $table->string('ticket_no')->nullable();
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
        Schema::dropIfExists('pnr_paxes');
    }
}
