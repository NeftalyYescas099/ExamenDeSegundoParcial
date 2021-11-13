<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Empleados\EmpleadoIndex;
use App\Http\Livewire\Empleados\EmpleadoCreate;
use App\Http\Livewire\Empleados\EmpleadoDelete;
use App\Http\Livewire\Empleados\EmpleadoEdit;
use App\Http\Livewire\Empleados\EmpleadoMostrar;

Route::get('/empleados', EmpleadoIndex::class)->name('empleado.index');
Route::get('/empleados/create', EmpleadoCreate::class)->name('empleado.create');
Route::get('/empleados/{empleado}/edit', EmpleadoEdit::class)->name('empleado.edit');
Route::get('/empleados/{empleado}/delete', EmpleadoDelete::class)->name('empleado.delete');
Route::get('/empleados/{empleado}/mostrar', EmpleadoMostrar::class)->name('empleado.mostrar');
