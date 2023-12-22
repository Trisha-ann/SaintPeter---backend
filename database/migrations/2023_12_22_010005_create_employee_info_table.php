<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employee_info', function (Blueprint $table) {
            $table->id('employee_acc_id');
            $table->string('lastname');
            $table->string('firstname');
            $table->string('email');
            $table->timestamps();
        });

        Schema::table('employee_info', function (Blueprint $table) {
            $table->foreign('employee_acc_id')->references('employee_acc_id')->on('employee');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_info');
    }
};
