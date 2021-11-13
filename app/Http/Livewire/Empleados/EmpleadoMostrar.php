<?php

namespace App\Http\Livewire\Empleados;

use App\Models\Empleado;
use Livewire\Component;

class EmpleadoMostrar extends Component
{
    public Empleado $empleado;
    public function render()
    {
        return view('livewire.empleado.empleado-mostrar');
    }

    public function mostrar()
    {
        $this->empleado->mostrar();
        return redirect(route('empleado.index'));
    }
}
