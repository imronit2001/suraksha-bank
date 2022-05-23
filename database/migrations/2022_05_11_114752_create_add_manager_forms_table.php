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
        Schema::create('add_manager_forms', function (Blueprint $table) {
            $table->id();
            $table->string('branchName');
            $table->string('firstName');
            $table->string('middleName')->nullable();
            $table->string('lastName');
            $table->string('fatherName');
            $table->string('motherName');
            $table->string('email');
            $table->string('contact');
            $table->string('gender');
            $table->string('maritalStatus');
            $table->string('qualification');
            $table->string('dob');
            $table->string('address');
            $table->string('state');
            $table->string('pincode');
            $table->string('category');
            $table->string('disability');
            $table->string('aadharNo');
            $table->string('photo');
            $table->string('signature');
            $table->string('userid')->default('admin');
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
        Schema::dropIfExists('add_manager_forms');
    }
};
