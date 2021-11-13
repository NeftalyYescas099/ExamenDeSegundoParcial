<?php

namespace App\Http\Livewire\Empleados;

class RulesEmpleado
{

    public static function Reglas()
    {
        return
            [
                'empleado.nombre' => 'required|string',
                'empleado.segundoNombre' => 'required|string',
                'empleado.apellidoPaterno' => 'required|string',
                'empleado.apellidoMaterno' => 'required|string',
                'empleado.sexo' => 'required|string',
                'empleado.fechaNacimiento' => 'required|string',
                'empleado.puesto' => 'required|string',
                'empleado.curp' => 'required|string',
                'empleado.rfc' => 'required|string',
                'empleado.estado' => 'required|string',
                'empleado.cp' => 'required|string',
                'empleado.salario' => 'required|string',
                'empleado.correoElectronico' => 'required|string',
                'empleado.horario' => 'required|string',
                'empleado.area' => 'required|string',
                'empleado.facebook' => 'required|string',
                'empleado.telefono' => 'required|string'


            ];
    }
}
