<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

Route::get('/', [controladorVistas::class,'home'])->name('rutaInicio');

Route::get('/formulario', [controladorVistas::class,'insert'])->name('rutacacas');

Route::get('/consultar', [controladorVistas::class,'select'])->name('rutaconsulta');

Route::view('/component', 'componentes')->name('rutacomponentes');


Route::post('/enviarCliente', [controladorVistas::class,'procesarCliente'])->name('rutaenviar');


/* Route::view('/', 'inicio')->name('rutaInicio');

Route::view('/formulario','formulario')->name('rutacacas');

Route::view('/consultar','clientes')->name('rutaconsulta'); */

