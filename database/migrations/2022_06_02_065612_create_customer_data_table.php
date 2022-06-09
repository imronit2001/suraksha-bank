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
        Schema::create('customer_data', function (Blueprint $table) {
            $table->id();
            $table->string('branchName')->nullable();
            $table->string('customerName')->nullable();
            $table->string('customerId')->nullable();
            $table->string('accountNo')->nullable();
            $table->string('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('maritalStatus')->nullable();
            $table->string('guardianName')->nullable();
            $table->string('guardianRelation')->nullable();
            $table->string('nationality')->nullable();
            $table->string('occupation')->nullable();
            $table->string('organisationName')->nullable();
            $table->string('designation')->nullable();
            $table->string('annualIncome')->nullable();
            $table->string('religion')->nullable();
            $table->string('disability')->nullable();
            $table->string('educationalQualification')->nullable();
            $table->string('aadharNo')->nullable();
            $table->string('panNo')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('district')->nullable();
            $table->string('state')->nullable();
            $table->string('pin')->nullable();
            $table->string('country')->nullable();
            $table->string('photo')->nullable();
            $table->string('signature')->nullable();
            $table->string('aadharCard')->nullable();
            $table->string('panCard')->nullable();
            $table->string('accountCreated')->nullable();
            $table->string('userId')->nullable();
            $table->string('loginPassword')->nullable();
            $table->string('balance')->nullable();
            $table->string('accountStatus')->nullable();
            $table->string('otp')->nullable();

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
        Schema::dropIfExists('customer_data');
    }
};
