<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\clienteController;
//ruta, tipo get('nombre de ruta', [nombre controlador::class, 'nombre de la funcion'])->name'apodo'

    
//post

//Rutas para trabajar con clienteController 
Route::get('/', [clienteController::class,'home'])->name('rutaInicio');
Route::get('/cliente/create', [clienteController::class,'create'])->name('rutacacas');
Route::post('/cliente', [clienteController::class,'store'])->name('rutaenviar');
Route::get('/cliente', [clienteController::class,'index'])->name('rutaconsulta');


/* Route::view('/', 'inicio')->name('rutaInicio');

Route::view('/formulario','formulario')->name('rutacacas');

Route::view('/consultar','clientes')->name('rutaconsulta'); */

