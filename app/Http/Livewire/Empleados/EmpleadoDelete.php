<?php

namespace App\Http\Livewire\Empleados;

use App\Models\Empleado;
use Livewire\Component;

class EmpleadoDelete extends Component
{
    public Empleado $empleado;
    public function render()
    {
        return view('livewire.empleado.empleado-delete');
    }

    public function delete()
    {
        $this->empleado->delete();
        return redirect(route('empleado.index'));
    }
}
