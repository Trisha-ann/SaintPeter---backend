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
        Schema::create('plan', function (Blueprint $table) {
            $table->id('plan_id');
            $table->string('plan_name');
            $table->string('plan_type');
            $table->integer('plan_price');
            $table->date('date');
            $table->timestamps();
        });

        Schema::table('plan', function (Blueprint $table) {
            $table->unsignedBigInteger('service_id');
         
            $table->foreign('service_id')->references('service_id')->on('services');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plan');
    }
};
