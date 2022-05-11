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
        Schema::create('add_staff_forms', function (Blueprint $table) {
            $table->id();
            $table->string('empType');
            $table->string('branchName');
            $table->string('designation');
            $table->string('firstName');
            $table->string('middleName')->nullable();
            $table->string('lastName');
            $table->string('dob');
            $table->string('email');
            $table->string('contact');
            $table->string('gender');
            $table->string('maritalStatus');
            $table->string('qualification');
            $table->string('category');
            $table->string('disability');
            $table->string('fatherName');
            $table->string('motherName');
            $table->string('guardianName');
            $table->string('address');
            $table->string('city');
            $table->string('district');
            $table->string('state');
            $table->string('pincode');
            $table->string('aadharNo');
            $table->string('panNo');
            $table->string('aadharFile');
            $table->string('panFile');
            $table->string('photo');
            $table->string('signature');
            $table->string('userid')->default('staff');
            $table->string('password');

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
        Schema::dropIfExists('add_staff_forms');
    }
};
