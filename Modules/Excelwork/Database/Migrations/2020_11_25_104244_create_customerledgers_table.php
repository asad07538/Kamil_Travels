<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerledgersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customerledgers', function (Blueprint $table) {
            $table->id();
            $table->string('sheet_no')->nullable();
            $table->string('sheet_row')->nullable();
            $table->string('ticket_no')->nullable();
            $table->string('main_row')->nullable();
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
        Schema::dropIfExists('customerledgers');
    }
}
