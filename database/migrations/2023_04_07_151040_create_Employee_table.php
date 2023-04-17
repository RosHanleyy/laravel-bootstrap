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
        Schema::create('Employee', function (Blueprint $table) {
                $table->integer('id', true);
                $table->char('first_name', 50);
                $table->char('second_name', 50);
                $table->bigInteger('phone');
                $table->char('email', 100);
                $table->integer('role_id')->index('role_connect');
                $table->foreign('role_id')->references('id')->on('Role');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Employee');
    }
};
