<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorUtiles;

class controladorUtiles extends Controller
{
    public function utilesEscolares(){
        return view('utilesEscolares'); 
    }

    public function procesarUtiles(validadorUtiles $peticion){

        $nombreU= $peticion->input('txtnombre');
        $marca= $peticion->input('txtmarca');

        $mensajeU="Se guardo: $nombreU $marca";

        session()->flash('exito', $mensajeU);

        return to_route('rutaUtilesEscolares');
    }
}
