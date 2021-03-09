<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAirlinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airlines', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');

            $table->string('comm_system')->nullable();
            $table->string('comm_international_per')->default(0);
            $table->string('comm_domestic_per')->default(0);

            $table->string('service_system')->nullable();
            $table->string('service_international_per')->default(0);
            $table->string('service_domestic_per')->default(0);

            $table->unsignedBigInteger('agreement_account_id')->nullable();
            $table->unsignedBigInteger('ticketing_account')->nullable();
            $table->unsignedBigInteger('commisison_account')->nullable();
            $table->unsignedBigInteger('refund_account')->nullable();
            $table->unsignedBigInteger('service_charge_account_id')->nullable();
            $table->unsignedBigInteger('wht_account')->nullable();
            
            $table->unsignedBigInteger('contact_person_id')->nullable();
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
        Schema::dropIfExists('airlines');
    }
}
