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
        Schema::create('customer_payment', function (Blueprint $table) {
            $table->id('bill_id');
            $table->integer('customer_id');
            $table->integer('customer_bill');
            $table->integer('employee_acc_id');
            $table->integer('plan_id');
            $table->date('date');
            $table->date('due_date');
            $table->integer('balance');
            $table->timestamps();
        });

        Schema::table('customer_payment', function (Blueprint $table) {
            $table->foreign('customer_id')->references('customer_id')->on('customer_info');
            $table->foreign('employee_acc_id')->references('employee_acc_id')->on('employee');
            $table->foreign('plan_id')->references('plan_id')->on('plan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_payment');
    }
};
