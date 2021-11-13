<div>
    <form wire:submit.prevent="editar">
        <div class="card">
            <div class="card-header bg-success text-white">
                Cambiar datos de empleado
            </div>
            <div class="card-body">
                @include('livewire.empleado.formulario')
            </div>
            <div class="card-footer text-muted bg-success text-white">
                <button class="btn btn-primary btn-sm"><i class="fa fa-iedit"></i>Actualizar</button>
                <a href="{{ route('empleado.index') }}" class="btn btn-danger btn-sm">Cancelar</a>
            </div>
        </div>
    </form>

</div>
