<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_details_table', function (Blueprint $table) {
            $table->id();
            $table->string('account_number');
            $table->string('transaction_type');
            $table->string('transaction_amount');
            $table->string('description');
            $table->date('date');
            // $table->foreign('customer_id')->references('id')->on('user_table');
            // $table->foreign('transaction_id')->references('id')->on('transaction');
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
        Schema::dropIfExists('transaction_details_table');
    }
};
