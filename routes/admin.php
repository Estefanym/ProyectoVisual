<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ReparacionController;
use App\Http\Controllers\TecnicoController;
use App\Http\Controllers\CitaController;

/*Route::get('/admin/inicio',['App\Http\Controllers\AdministradorController','show'])->name('show.index');*/
Route::get('/admin',['App\Http\Controllers\AdministradorController','index']);
Route::get('/admin/login',['App\Http\Controllers\AdministradorController','logi']);
Route::post('/admin/login',['App\Http\Controllers\AdministradorController','login']);
/* PRODUCTOS */
Route::get('/admin/productos',['App\Http\Controllers\AdministradorController','productos'])->name('productos');
Route::post('/admin/productos',[ProductoController::class,'create'])->name('productos.create');
Route::delete('/admin/productos{producto}',[ProductoController::class,'destroy'])->name('productos.destroy');
Route::get('/admin/productos/edit{producto}',[ProductoController::class,'edit'])->name('productos.edit');
Route::put('/admin/productos/{producto}',[ProductoController::class,'update'])->name('productos.update');
Route::get('/admin/productos/pdf',[App\Http\Controllers\AdministradorController::class,'pdf'])->name('productos.pdf');

/* REPARACIONES */
Route::get('/admin/reparacion',['App\Http\Controllers\AdministradorController','reparaciones'])->name('reparaciones');
Route::post('/admin/reparacion',[ReparacionController::class,'create'])->name('reparacion.create');
Route::delete('/admin/reparacion{reparacion}',[ReparacionController::class,'destroy'])->name('reparaciones.destroy');
Route::get('/admin/reparacion/edit{reparacion}',[ReparacionController::class,'edit'])->name('reparaciones.edit');
Route::put('/admin/reparacion/{reparacion}',[ReparacionController::class,'update'])->name('reparaciones.update');

/*CITAS */
Route::delete('/admin/cita{cita}',[CitaController::class,'destroy'])->name('citas.destroy');
Route::get('/admin/cita/edit{cita}',[CitaController::class,'edit'])->name('citas.edit');
Route::put('/admin/cita/{cita}',[CitaController::class,'update'])->name('citas.update');

/* TECNICOS */
Route::get('/admin/tecnicos',['App\Http\Controllers\AdministradorController','tecnicos'])->name('tecnicos');
Route::post('/admin/tecnicos',[TecnicoController::class,'create'])->name('tecnicos.create');
Route::delete('/admin/tecnicos{tecnico}',[TecnicoController::class,'destroy'])->name('tecnicos.destroy');
Route::get('/admin/tecnicos/edit{tecnico}',[TecnicoController::class,'edit'])->name('tecnicos.edit');
Route::put('/admin/tecnicos/{tecnico}',[TecnicoController::class,'update'])->name('tecnicos.update');

/*PEDIDOS */
Route::get('/admin/pedidos',['App\Http\Controllers\AdministradorController','pedidos'])->name('pedidos');