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

//La razón del id en la ruta, es porque aqui estara el id del cliente al que
//vamos a actualizar
Route::get('/clientes/{id}/editar', [clienteController::class, 'edit'])->name('clientes.edit');

Route::put('/clientes/{id}', [clienteController::class, 'update'])->name('clientes.update');

Route::delete('/clientes/{id}', [clienteController::class, 'destroy'])->name('clientes.destroy');


/* Route::view('/', 'inicio')->name('rutaInicio');

Route::view('/formulario','formulario')->name('rutacacas');

Route::view('/consultar','clientes')->name('rutaconsulta'); */

