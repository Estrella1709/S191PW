<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

Route::get('/', [controladorVistas::class, 'inicioSesion'])->name('rutaInicioSesion');
Route::get('/registro', [controladorVistas::class, 'registro'])->name('rutaRegistro');
Route::get('/validacionRegistro', [controladorVistas::class, 'validacionRegistro'])->name('rutaValidacionRegistro');
Route::get('/recuperacionCuenta', [controladorVistas::class, 'recuperacionCuenta'])->name('rutaRecuperacionCuenta');
Route::get('/hoteles', [controladorVistas::class, 'hoteles'])->name('rutaHoteles');
Route::get('/detalleshotel', [controladorVistas::class, 'detalleshotel'])->name('rutaDetallesHotel');
Route::get('/reservahotel', [controladorVistas::class, 'reservahotel'])->name('rutaReservaHotel');
Route::get('/vuelos', [controladorVistas::class, 'vuelos'])->name('rutaVuelos');
Route::get('/detallesvuelo', [controladorVistas::class, 'detallesvuelo'])->name('rutaDetallesVuelo');
Route::get('/reservavuelo', [controladorVistas::class, 'reservavuelo'])->name('rutaReservavuelo');