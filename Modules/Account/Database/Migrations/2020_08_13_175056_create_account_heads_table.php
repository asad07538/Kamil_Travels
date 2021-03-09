<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountHeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_heads', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('contact_person_id')->nullable();

            $table->unsignedBigInteger('level_id')->default(3);
            $table->string('active')->default(0);


            $table->string('credit_limit')->nullable();
            $table->string('credit_days')->nullable();

            $table->unsignedBigInteger('parent_id')->nullable();
            $table->unsignedBigInteger('added_by')->nullable();



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
        Schema::dropIfExists('account_heads');
    }
}
