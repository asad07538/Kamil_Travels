<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('father_name')->nullable();
            $table->string('surname')->nullable();
            $table->unsignedBigInteger('country_id')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->enum('gender', ['male', 'female']);
            // $table->string('gender')->nullable();
            $table->string('title')->nullable();
            $table->string('cnic')->nullable();
            $table->unsignedBigInteger('member_id')->nullable();

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
        Schema::dropIfExists('people');
    }
}
