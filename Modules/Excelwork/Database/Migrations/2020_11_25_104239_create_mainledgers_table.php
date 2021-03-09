<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainledgersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mainledgers', function (Blueprint $table) {
            $table->id();
            $table->string('row')->nullable();
            $table->string('ticket_no')->nullable();
            $table->string('co')->nullable();
            $table->string('sheet_no')->nullable();
            $table->string('sheet_row')->nullable();
            $table->string('found')->default(0);
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
        Schema::dropIfExists('mainledgers');
    }
}
