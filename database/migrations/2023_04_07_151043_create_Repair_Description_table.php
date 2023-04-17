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
        Schema::create('Repair_Description', function (Blueprint $table) {
            $table->integer('id', true);
            $table->char('title', 50);
            $table->string('description', 500);
            $table->integer('device_id')->index('device_connect');
            $table->foreign('device_id')->references('id')->on('Device');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Repair_Description');
    }
};
