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
        Schema::create('know_your_customer_table', function (Blueprint $table) {
            $table->string('formType');
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
            $table->string('Address');
            $table->string('City');
            $table->string('Pin');
            $table->string('State');
            $table->string('Country');
            $table->bigInteger('Mobile');
            $table->bigInteger('Telephone');
            $table->string('AddressProofNumber');
            $table->date('Date');
            $table->string('ApplicantPhoto');
            $table->string('ApplicantSignature');
            $table->string('ApplicantAadhar');
            $table->string('ApplicantPan');

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
        Schema::dropIfExists('kyc_form_table');
    }
};
