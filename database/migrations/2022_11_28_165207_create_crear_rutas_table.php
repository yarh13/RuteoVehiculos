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
        Schema::create('crear_rutas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->string('nombre_ruta');
            $table->integer('cant_vehiculos');
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->integer('capacidad_carga');
            $table->integer('cant_clientes');
            $table->time('hora_in_recep');
            $table->time('hora_fin_recep');
            $table->timestamp('fecha_creacion');

            
           // ->onDelete('set null');//se coloca cuando se elimina el usuario pero no las rutas relacionadas a este

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
        Schema::dropIfExists('crear_rutas');
    }
};
