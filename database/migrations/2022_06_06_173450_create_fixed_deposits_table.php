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
        Schema::create('fixed_deposits', function (Blueprint $table) {
            $table->id();
            $table->string('c_name')->nullable();
            $table->string('account_no')->nullable();
            $table->string('c_id')->nullable();
            $table->string('branch_name')->nullable();
            $table->string('branch_city')->nullable();
            $table->string('amount')->nullable();
            $table->string('interest_type')->nullable();
            $table->string('year')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('nominee')->nullable();
            $table->string('nominee_relation')->nullable();
            $table->string('nominee_aadharNo')->nullable();
            $table->string('pan')->nullable();
            $table->string('terms')->nullable();
            $table->string('status')->default(0);
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
        Schema::dropIfExists('fixed_deposits');
    }
};
