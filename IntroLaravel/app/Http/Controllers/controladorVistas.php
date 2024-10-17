<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    
    public function home(){
        return view('inicio');
    }

    public function insert(){
        return view('formulario');
    }

    public function select(){
        return view('clientes');
    }

    public function procesarCliente(Request $peticion){

        //Respuesta a nuestra petición POST
        //return 'La info del cliente llego al controlador';

        return $peticion->all();
        //return $peticion->ip();
        //return $peticion->path();
        //return $peticion->url(); 


    }
}
