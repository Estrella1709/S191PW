<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

Route::get('/', [controladorVistas::class, 'inicioSesion'])->name('rutaInicioSesion');
