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
        Schema::create('practice', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->char('name_e',10);
            $table->dateTimeTz("zona_horaria", $precision=0);
            $table->date('fecha');
            $table->decimal('monto',$precision=8, $scale =2);
            $table->geometry('positions');
            $table->ipAddress('visitor');
            $table->point('position');
            $table->set('flavors', ['strawberry', 'vanilla']);
            $table->tinyText('notes');
            $table->year('birth_year');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('practice');
    }
};
