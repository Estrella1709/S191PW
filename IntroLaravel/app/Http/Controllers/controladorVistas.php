<?php

        //Respuesta a nuestra petición POST
        //return 'La info del cliente llego al controlador';
        //return $peticion->ip();
        //return $peticion->path();
        //return $peticion->url(); 
        //return $peticion->all();  

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;

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

    public function procesarCliente(validadorCliente $peticion){

        //return redirect('/');
        //return redirect()->route('rutaconsulta');
        //return back();

        //$id=[['usuario'=>'1'],['usuario'=>'2']];
        //return view('formulario', compact('id'));

        $usuario= $peticion->input('txtnombre');
        session()->flash('exito', 'Se guardo el usuario: '. $usuario);
                        //primer parametro es la llave, el segundo es el mensaje
        return to_route('rutacacas');



    }
}
