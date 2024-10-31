<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

Route::get('/', [controladorVistas::class, 'home'])->name('rutaHome');
Route::get('/registroLibro', [controladorVistas::class, 'registroLibro'])->name('rutaRegistroLibro');

