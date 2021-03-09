<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('person_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('ticketing_account_id');
            $table->unsignedBigInteger('salary_account_id');
            $table->unsignedBigInteger('loan_account_id');
            $table->unsignedBigInteger('mistake_account_id');
            $table->unsignedBigInteger('allowed_expance_account_id');
            
            
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
        Schema::dropIfExists('employees');
    }
}
