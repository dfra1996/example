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
        Schema::create('practicetwo', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('red');
            $table->string('orange');
            $table->string('blue');
            $table->string('skyblue');
            $table->string('brown');
            $table->string('pink');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('practicetwo');
    }
};
