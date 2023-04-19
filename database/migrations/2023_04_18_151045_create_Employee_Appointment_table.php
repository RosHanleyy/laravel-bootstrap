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
            $table->unsignedInteger('id', true);
            $table->unsignedInteger('employee_id')->unsignedInteger();
            $table->unsignedInteger('appointment_id')->unsignedInteger();
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
