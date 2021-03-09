<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('person_id');

            $table->unsignedBigInteger('account_head_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('refund_id');
            $table->unsignedBigInteger('agreement_account_id');
            $table->float('total_points', 8, 2)->default(0);
            $table->float('used_points', 8, 2)->default(0);
            $table->float('remaining_points', 8, 2)->default(0);

            $table->string('agreements')->nullable();
            $table->string('due_date')->nullable();
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
        Schema::dropIfExists('customers');
    }
}
