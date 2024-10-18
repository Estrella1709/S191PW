<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorRepaso;
/* Route::get('/', function () {
    return view('welcome');
    }); */

/* Route::view('/', 'portada');

Route::view('/repaso1', 'repaso1'); */

Route::get('/', [controladorRepaso::class,'portada']);

Route::get('/repaso1', [controladorRepaso::class,'repaso1']);

    Route::post('/convertidorMBGB', [controladorRepaso::class, 'convertidorMBGB'])->name('convertidorMBGB');
    Route::post('/convertidorGBMB', [controladorRepaso::class, 'convertidorGBMB'])->name('convertidorGBMB');
    Route::post('/convertidorGBTB', [controladorRepaso::class, 'convertidorGBTB'])->name('convertidorGBTB');
    Route::post('/convertidorTBGb', [controladorRepaso::class, 'convertidorTBGb'])->name('convertidorTBGb');