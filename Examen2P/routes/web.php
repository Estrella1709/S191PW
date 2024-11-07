<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorUtiles;

Route::get('/', [controladorUtiles::class,'utilesEscolares'])->name('rutaUtilesEscolares');

Route::post('/procesarUtiles', [controladorUtiles::class, 'procesarUtiles'])->name('rutaProcesarUtiles');
