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
        Schema::create('credit_card_table', function (Blueprint $table) {
            $table->id();
            $table->string('prefix');
            $table->string('FullName');
            $table->string('FatherName');
            $table->string('gender');
            $table->date('dob');
            $table->string('MaritalStatus');
            $table->string('Nationality');
            $table->string('ResidentialStatus');
            $table->string('PanNumber');
            $table->string('AadharNumber');
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
        Schema::dropIfExists('credit_card_table');
    }
};
