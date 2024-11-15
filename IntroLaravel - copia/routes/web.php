<?php

use Illuminate\Support\Facades\Route;

//mandas a llamar el controlador
use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\clienteController;
//ruta, tipo get('nombre de ruta', [nombre controlador::class, 'nombre de la funcion'])->name'apodo'


Route::get('/', [controladorVistas::class,'home'])->name('rutaInicio');
Route::get('/consultar', [controladorVistas::class,'select'])->name('rutaconsulta');
Route::view('/component', 'componentes')->name('rutacomponentes');
//post
Route::post('/enviarCliente', [controladorVistas::class,'procesarCliente'])->name('rutaenviar');


//Rutas para trabajar con clienteController 
Route::get('/cliente/create', [clienteController::class,'create'])->name('rutacacas');


/* Route::view('/', 'inicio')->name('rutaInicio');

Route::view('/formulario','formulario')->name('rutacacas');

Route::view('/consultar','clientes')->name('rutaconsulta'); */

