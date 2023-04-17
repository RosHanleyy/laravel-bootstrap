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
        Schema::create('Employee_Appointment', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('employee_id')->index('employee_connect');
            $table->integer('appointment_id')->index('appointment_connect');
            $table->foreign('employee_id')->references('id')->on('Employee');
            $table->foreign('appointment_id')->references('id')->on('Appointment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Employee_Appointment');
    }
};
