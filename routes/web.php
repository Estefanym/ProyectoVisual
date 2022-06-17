<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\GarantiaController;
use App\Http\Controllers\ReparacionController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\CarritoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*/ redirecciona a la pagina principal del sitio y esta en la vista welcome
se puede redireccionar a que solo se muestre una cadena, tambien se pueden 
solo mandar variables laravel lee este archivo de forma secuencial
Vistas = HTML

*/
Route::get('/',['App\Http\Controllers\HomeController','index']);
Route::get('/productos',['App\Http\Controllers\ProductoController','productos'])->name('productos.usuario');

Route::get('/reparaciones',['App\Http\Controllers\ReparacionController','reparaciones']);
Route::post('/reparaciones',['App\Http\Controllers\CitaController','create'])->name('cita.create');

Route::get('/contactos',['App\Http\Controllers\ContactoController','contactos']);

Route::get('/garantia',['App\Http\Controllers\GarantiaController','garantia']);

Route::get('/login',['App\Http\Controllers\UsuarioController','log'])->name('login');
Route::post('/login/usuario',['App\Http\Controllers\UsuarioController','login'])->name('login.usuario');

Route::get('/carrito',[CarritoController::class,'carrito'])->name('carrito.index');
Route::post('/add',[CarritoController::class,'add'])->name('carrito.store');
Route::post('/remove', [CartController::class, 'remove'])->name('carrito.remove');
Route::post('/clear', [CartController::class, 'clear'])->name('carrito.clear');



//Route::get('/admin',['App\Http\Controllers\AdministradorController','productos']);
/*Route::get('/admin',['App\Http\Controllers\AdministradorController','reparaciones']);
Route::get('/admin',['App\Http\Controllers\AdministradorController','tecnicos']);*/



    

