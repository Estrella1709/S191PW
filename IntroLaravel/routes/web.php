<?php

use Illuminate\Support\Facades\Route;

//mandas a llamar el controlador
use App\Http\Controllers\controladorVistas;
//ruta, tipo get('nombre de ruta', [nombre controlador::class, 'nombre de la funcion'])->name'apodo'
Route::get('/', [controladorVistas::class,'home'])->name('rutaInicio');

Route::get('/formulario', [controladorVistas::class,'insert'])->name('rutacacas');

Route::get('/consultar', [controladorVistas::class,'select'])->name('rutaconsulta');

Route::view('/component', 'componentes')->name('rutacomponentes');

//post
Route::post('/enviarCliente', [controladorVistas::class,'procesarCliente'])->name('rutaenviar');


/* Route::view('/', 'inicio')->name('rutaInicio');

Route::view('/formulario','formulario')->name('rutacacas');

Route::view('/consultar','clientes')->name('rutaconsulta'); */

