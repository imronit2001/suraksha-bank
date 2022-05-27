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
        Schema::create('change_branches', function (Blueprint $table) {
            $table->id();
            $table->string('AccountType');
            $table->string('AccountNumber');
            $table->string('BranchCode');
            $table->string('CurrentBranch');
            $table->string('NewBranch');
            $table->string('City');
            $table->string('State');
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
        Schema::dropIfExists('change_branches');
    }
};
