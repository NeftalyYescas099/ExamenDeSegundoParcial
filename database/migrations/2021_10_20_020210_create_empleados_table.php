<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('segundoNombre')->nullable();
            $table->string('apellidoPaterno');
            $table->string('apellidoMaterno');
            $table->string('sexo');
            $table->string('fechaNacimiento');
            $table->string('puesto');
            $table->string('curp');
            $table->string('rfc');
            $table->string('estado');
            $table->string('cp');
            $table->string('salario');
            $table->string('correoElectronico');
            $table->string('horario');
            $table->string('area');
            $table->string('facebook')->nullable();
            $table->string('telefono');
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
        Schema::dropIfExists('Empleados');
    }
}
