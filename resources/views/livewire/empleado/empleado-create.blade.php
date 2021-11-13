<div>
    <form wire:submit.prevent="crear">
        <div class="card">
            <div class="card-header bg-success text-dark">
                Introducir datos de un nuevo empleado
            </div>
            <div class="card-body bg-success text-dark">
            @include('livewire.empleado.formulario')
            </div>
            <div class="card-footer text-dark  ">
                <button class="btn btn-success btn-sm"><i class="fa fa-save"></i>Registrar</button>
                <a href="{{ route('empleado.index') }}" class="btn btn-primary btn-sm">Volver</a>
            </div>
        </div>
    </form>

</div>
