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
            $table->string('aType');
            $table->string('aNo');
            $table->string('branchName');
            $table->string('branchCode');
            $table->string('newBranchName');
            $table->string('newBranchCode');
            $table->longText('reason');
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
