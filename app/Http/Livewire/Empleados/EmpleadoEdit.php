<?php

namespace App\Http\Livewire\Empleados;

use App\Http\Livewire\Empleados\RulesEmpleado;
use App\Models\Empleado;
use Livewire\Component;

class EmpleadoEdit extends Component
{
    public Empleado $empleado;
    public function render()
    {
        return view('livewire.empleado.empleado-edit');
    }
    public function editar()
    {
        $this->validate();
        $this->empleado->save();
        return redirect(route('empleado.index'));
    }
    protected function rules()
    {
        return RulesEmpleado::Reglas();
    }
}
