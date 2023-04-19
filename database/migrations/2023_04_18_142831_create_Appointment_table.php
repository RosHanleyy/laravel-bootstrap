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
        Schema::create('Appointment', function (Blueprint $table) {
            $table->unsignedInteger('id', true);
            $table->date('date_booked');
            $table->date('date_recieved');
            $table->unsignedInteger('repair_id')->unsignedInteger();
            $table->unsignedInteger('user_id')->unsignedInteger();
            $table->foreign('repair_id')->references('id')->on('Repair_Description');
            $table->foreign('user_id')->references('id')->on('Users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Appointment');
    }
};
