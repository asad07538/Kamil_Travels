<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePnrFaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pnr_fares', function (Blueprint $table) {
            $table->id();
            $table->integer('basic_fare')->default(0);
            $table->integer('total_tax')->default(0);
            $table->integer('subtotal')->default(0);
            
            $table->integer('airline_comm')->default(0);
            $table->integer('airline_service_charge')->default(0);
            $table->integer('total_payable')->default(0);

            $table->integer('extra_service_charge')->default(0);
            $table->integer('total_receivable')->default(0);
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
        Schema::dropIfExists('pnr_fares');
    }
}
