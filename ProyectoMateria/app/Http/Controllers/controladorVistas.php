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
}
