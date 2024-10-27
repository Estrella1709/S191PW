<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

Route::get('/', [controladorVistas::class, 'inicioSesion'])->name('rutaInicioSesion');
Route::get('/registro', [controladorVistas::class, 'registro'])->name('rutaRegistro');
Route::get('/validacionRegistro', [controladorVistas::class, 'validacionRegistro'])->name('rutaValidacionRegistro');
Route::get('/recuperacionCuenta', [controladorVistas::class, 'recuperacionCuenta'])->name('rutaRecuperacionCuenta');