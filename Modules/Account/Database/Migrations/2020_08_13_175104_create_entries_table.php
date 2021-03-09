<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->id();
            $table->string('invoice');
            $table->string('debit_total');
            $table->string('credit_total');
            $table->unsignedBigInteger('entry_type_id');

            $table->unsignedBigInteger('on_account_id');
            $table->unsignedBigInteger('made_by_id');
            $table->unsignedBigInteger('inserted_by_id');
            $table->unsignedBigInteger('parent_entry_id');
            $table->string('status');
            $table->string('date');
            $table->string('narration');
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
        Schema::dropIfExists('entries');
    }
}
