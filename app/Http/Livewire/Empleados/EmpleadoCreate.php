<?php

namespace App\Http\Livewire\Empleados;

use App\Http\Livewire\Empleados\RulesEmpleado;
use App\Models\Empleado;
use Livewire\Component;

class EmpleadoCreate extends Component
{

    public Empleado $empleado;

    public function mount()
    {
        $this->empleado = new Empleado();
    }

    public function render()
    {
        return view('livewire.empleado.empleado-create');
    }

    public function crear()
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
