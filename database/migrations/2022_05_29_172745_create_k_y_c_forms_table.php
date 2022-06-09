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
        Schema::create('kyc_form_table', function (Blueprint $table) {
            $table->string('prefix');
            $table->string('FirstName');
            $table->string('MidName');
            $table->string('LastName');
            $table->string('gender');
            $table->date('DOB');
            $table->string('MaritalStatus');
            $table->string('Nationality');
            $table->string('ResidentialStatus');
            $table->string('PanNumber');
            $table->string('AadharNumber');
            $table->string('ProofOfIdentity');
            $table->string('CorrespondenceAddress');
            $table->string('City');
            $table->string('Pin');
            $table->string('State');
            $table->string('Country');
            $table->bigInteger('Mobile');
            $table->bigInteger('Telephone');
            $table->string('PermanentAddressDetails');
            $table->string('PermanentAddressType');
            $table->string('PermanentAddress');
            $table->string('PermanentCity');
            $table->string('PermanentState');
            $table->string('PermanentPin');
            $table->string('PermanentCountry');
            $table->string('AddressProofNumber');
            $table->string('AnnualIncome');
            $table->string('NetWorth');
            $table->date('Date');
            $table->string('OccupationType');
            $table->string('ApplicantPhoto');
            $table->string('ApplicantSignature');

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
