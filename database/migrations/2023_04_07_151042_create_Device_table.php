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
        Schema::create('Device', function (Blueprint $table) {
            $table->unsignedInteger('id', true);
            $table->char('model', 100);
            $table->string('description', 500);
            $table->unsignedInteger('image_id')->unsignedInteger();
            $table->foreign('image_id')->references('id')->on('Image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Device');
    }
};
