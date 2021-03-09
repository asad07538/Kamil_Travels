<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePNRsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pnr', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('issue_date')->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->unsignedBigInteger('airline_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('user_name')->nullable();
            $table->string('currency')->nullable();
            $table->unsignedBigInteger('generated_at')->nullable();

            $table->integer('adult')->default(0);
            $table->integer('child')->default(0);
            $table->integer('infant')->default(0);

            $table->unsignedBigInteger('adult_fare_id')->nullable();
            $table->unsignedBigInteger('child_fare_id')->nullable();
            $table->unsignedBigInteger('infant_fare_id')->nullable();

            $table->integer('total_basic_fare')->default(0);
            $table->integer('total_equivalent_fare')->default(0);
            $table->integer('total_tax')->default(0);
            $table->integer('total_surcharge')->default(0);
            $table->integer('total_servicecharge')->default(0);
            $table->integer('ticket_based_tax')->default(0);
            $table->integer('total_amount')->default(0);

            $table->string('status');

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
        Schema::dropIfExists('pnr');
    }
}
