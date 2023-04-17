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
            $table->integer('id', true);
            $table->date('date_booked');
            $table->date('date_recieved');
            $table->integer('repair_id')->index('repair_connect');
            $table->integer('customer_id')->index('customer_connect');
            $table->foreign('repair_id')->references('id')->on('Repair_Description');
            $table->foreign('Customer_id')->references('id')->on('Customer');
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
