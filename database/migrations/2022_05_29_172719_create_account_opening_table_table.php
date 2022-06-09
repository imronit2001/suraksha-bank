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
        Schema::create('account_opening_table', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('password');
            $table->string('prefix');
            $table->string('FirstName');
            $table->string('MidName');
            $table->string('LastName');
            $table->date('DOB');
            $table->string('gender');
            $table->string('MaritalStatus');
            $table->string('FatherName');
            $table->string('MotherName');
            $table->string('illiterate');
            $table->string('GaurdianName');
            $table->string('RelationWithGuardian');
            $table->string('Nationality');
            $table->string('ResidentialStatus');
            $table->string('OccupationType');
            $table->string('religion');
            $table->string('category');
            $table->string('CustomerType');
            $table->string('Disability');
            $table->string('Qualification');
            $table->string('PanNumber');
            $table->bigInteger('Mobile');
            $table->string('Email');
            $table->bigInteger('Telephone');
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
            $table->string('IsCurrentAddress');
            $table->string('AddressDetails');
            $table->string('CurrentAddressType');
            $table->string('CurrentAddress');
            $table->string('CurrentCity');
            $table->string('CurrentDistrict');
            $table->string('CurrentState');
            $table->string('CurrentPin');
            $table->string('CurrentCountry');
            $table->string('ApplicantPhoto');
            $table->string('ApplicantSignature');
            $table->string('Place');

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
        Schema::dropIfExists('account_opening_table');
    }
};
