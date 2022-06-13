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
        Schema::create('customer', function (Blueprint $table) {
            $table->id();
            $table->string('customerId');
            $table->string('account_no');
            $table->string('login_pass');
            $table->string('transaction_pass');
            $table->string('prefix');
            $table->string('FullName');
            $table->date('DOB');
            $table->string('gender');
            $table->string('MaritalStatus');
            $table->string('FatherName');
            $table->string('MotherName');
            $table->string('GaurdianName')->nullable();
            $table->string('RelationWithGuardian')->nullable();
            $table->string('Nationality');
            $table->string('ResidentialStatus');
            $table->string('OccupationType');
            $table->string('religion');
            $table->string('category');
            $table->string('CustomerType');
            $table->string('Disability');
            $table->string('Qualification');
            $table->string('PanNumber')->nullable();
            $table->bigInteger('Mobile');
            $table->string('Email');
            $table->bigInteger('Telephone')->nullable();
            $table->string('AddressProof');
            $table->string('AddressProofNumber');
            $table->string('issuedBy');
            $table->string('AddressType');
            $table->string('Address');
            $table->string('City');
            $table->string('District');
            $table->string('State');
            $table->string('Pin');
            $table->string('Country');
            $table->string('ApplicantPhoto')->default('Not Available');
            $table->string('ApplicantAadhar')->default('Not Available');
            $table->string('ApplicantSignature')->default('Not Available');
            $table->string('Place');
            $table->string('signDate');
            $table->string('Status')->default('Active');
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
        Schema::dropIfExists('customer');
    }
};
