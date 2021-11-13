<div class="row">
    <div class="mx-auto col-5 bg-success text-dark">
        <div class="form-group">
            <label>Primer nombre</label>
            <input wire:model.defer="empleado.nombre" type="text" class="form-control">
            @error('empleado.nombre') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label>Segundo nombre</label>
            <input wire:model.defer="empleado.segundoNombre" type="text" class="form-control">
            @error('empleado.segundoNombre') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label>Apellido paterno</label>
            <input wire:model="empleado.apellidoPaterno" type="text" class="form-control">
            @error('empleado.apellidoPaterno') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label>Apellido materno</label>
            <input wire:model.defer="empleado.apellidoMaterno" type="text" class="form-control">
            @error('empleado.apellidoMaterno') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label>Sexo</label>
            <input wire:model.defer="empleado.sexo" type="text" class="form-control">
            @error('empleado.sexo') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label>Fecha de nacimiento</label>
            <input wire:model.defer="empleado.fechaNacimiento" type="text" class="form-control">
            @error('empleado.fechaNacimiento') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label>Puesto de trabajo</label>
            <input wire:model="empleado.puesto" type="text" class="form-control">
            @error('empleado.puesto') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label>Horario de trabajo</label>
            <input wire:model.defer="empleado.horario" type="text" class="form-control">
            @error('empleado.horario') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label>Area de trabajo</label>
            <input wire:model="empleado.area" type="text" class="form-control">
            @error('empleado.area') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label>Salario</label>
            <input wire:model.defer="empleado.salario" type="text" class="form-control">
            @error('empleado.salario') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label>CURP</label>
            <input wire:model.defer="empleado.curp" type="text" class="form-control">
            @error('empleado.curp') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label>RFC</label>
            <input wire:model.defer="empleado.rfc" type="text" class="form-control">
            @error('empleado.rfc') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label>Estado</label>
            <input wire:model.defer="empleado.estado" type="text" class="form-control">
            @error('empleado.estado') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label>Codigo Postal</label>
            <input wire:model="empleado.cp" type="text" class="form-control">
            @error('empleado.cp') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label>Correo Electronico</label>
            <input wire:model.defer="empleado.correoElectronico" type="text" class="form-control">
            @error('empleado.correoElectronico') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label>Facebook</label>
            <input wire:model.defer="empleado.facebook" type="text" class="form-control">
            @error('empleado.facebook') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label>Telefono</label>
            <input wire:model.defer="empleado.telefono" type="text" class="form-control">
            @error('empleado.telefono') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
    </div>
</div>
