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
        Schema::create('user_table', function (Blueprint $table) {
            $table->id();
            $table->string('CustomerName');
            $table->string('AccountNumber');
            $table->string('AccountType');
            $table->string('AadharNumber');
            $table->string('AccountBalance');
            $table->string('Address');
            $table->string('City');
            $table->string('State');
            $table->string('PinCode');
            $table->string('Mobile');
            $table->string('Gmail');
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
        //
    }
};
