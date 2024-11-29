<?php

use Illuminate\Support\Facades\Route;

//mandas a llamar el controlador
use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\ClienteController;
//ruta, tipo get('nombre de ruta', [nombre controlador::class, 'nombre de la funcion'])->name'apodo'

Route::get('/',[ClienteController::class, 'home'])->name('rutainicio');
//Creamos la ruta,primero se recomienda que le ponemos el nombre del modelo, despues nuestro ClienteControler
Route::resource('cliente',ClienteController::class);



