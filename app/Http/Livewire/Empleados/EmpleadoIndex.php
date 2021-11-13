<?php

namespace App\Http\Livewire\Empleados;

use App\Models\Empleado;
use Livewire\Component;

class EmpleadoIndex extends Component
{

    public function render()
    {
        $empleado = Empleado::paginate(5);
        return view('livewire.empleado.empleado-index', compact('empleado'));
    }
}
