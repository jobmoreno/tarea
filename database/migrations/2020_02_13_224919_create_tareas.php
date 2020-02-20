<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarea', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_Tarea');
            $table->date('fecha_inicio');
            $table->date('fecha_termino');
            $table->text('descripcion');
            $table->unsignedBigInteger('categoria_id');ç
            $table->smallInteger('prioridad')->unsigned();
            $table->string('status');
            $table->boolean('terminada');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tarea');
    }
}
