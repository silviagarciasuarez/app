<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usuario_controller;
use App\Http\Controllers\Viaje_controller;
use App\Http\Controllers\Actividad_controller;
use App\Http\Controllers\AdminController;

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
 
Route::get('/', [Actividad_controller::class,'welcome'])->name('welcome');

Route::get('/viaje', [Viaje_controller::class,'viaje'])->name('viaje');

Route::get('/actividad', [Actividad_controller::class,'actividad'])->name('actividad');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Rutas para crear nuevas actividades 

Route::post('/nueva_actividad/{id}', [Actividad_controller::class,'nueva_actividad'])
->middleware('auth')
->name('nueva_actividad');

Route::post('/nueva/{id}', [Actividad_controller::class,'nueva'])->name('nueva');

//Rutas para crear nuevos viajes 

Route::post('/nuevo_viaje/{id}', [Viaje_controller::class,'nuevo_viaje'])
->middleware('auth')
->name('nuevo_viaje');

Route::post('/nuevo/{id}', [Viaje_controller::class,'nuevo'])->name('nuevo');

//ruta para entrar como admin


Route::get('/home_admin', function () {
    return view('home_admin');
})
->middleware('auth.admin')
->name('home_admin');


//rutas para el rol del administrador USUARIOS

Route::get('/usuarios', [Usuario_controller::class,'usuarios'])
->middleware('auth.admin')
->name('usuarios');


Route::post('/eliminar_usuario/{id}', [Usuario_controller::class,'eliminar_usuario'])
->middleware('auth.admin')
->name('eliminar_usuario');


Route::post('/editar_usuario/{id}', [Usuario_controller::class,'editar_usuario'])
->middleware('auth.admin')
->name('editar_usuario');



//rutas para editar VIAJES para el admin


Route::get('/editar_viaje', [Viaje_controller::class,'editar_viaje'])
->middleware('auth.admin')
->name('editar_viaje');

Route::post('/eliminar_viaje/{id}', [Viaje_controller::class,'eliminar_viaje'])
->middleware('auth.admin')
->name('eliminar_viaje');


//rutas para editar ACTIVIDADES para el admin


Route::get('/editar_actividad', [Actividad_controller::class,'editar_actividad'])
->middleware('auth.admin')
->name('editar_actividad');

Route::post('/eliminar_actividad/{id}', [Actividad_controller::class,'eliminar_actividad'])
->middleware('auth.admin')
->name('eliminar_actividad');





