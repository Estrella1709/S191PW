<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function inicioSesion(){
        return view('inicioSesion');
    }

    public function registro(){
        return view('registro');
    }

    public function validacionRegistro(){
        return view('validacionRegistro');
    }

    public function recuperacionCuenta(){
        return view('recuperacionCuenta');
    }

    public function hoteles(){
        return view('hoteles');
    }

    public function detalleshotel(){
        return view('detalleshotel');
    }

    public function reservahotel(){
        return view('reservahotel');
    }

    public function vuelos(){
        return view('vuelos');
    }

    public function detallesvuelo(){
        return view('detallesvuelo');
    }

    public function reservavuelo(){
        return view('reservavuelo');
    }
}
