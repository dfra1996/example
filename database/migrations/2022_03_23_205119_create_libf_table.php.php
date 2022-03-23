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
        Schema::create('libf', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->string('number');
            $table->string('addres');
            $table->string('phone');
            $table->string('city');
            $table->string('name');
            $table->string('parents');
            $table->geometry('positions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libf');
    }
};
