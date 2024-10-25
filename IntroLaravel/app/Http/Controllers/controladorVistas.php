<?php

        //Respuesta a nuestra petición POST
        //return 'La info del cliente llego al controlador';
        //return $peticion->ip();
        //return $peticion->path();
        //return $peticion->url(); 
        //return $peticion->all();  

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
          
        $validacion= $peticion->validate([
            'txtnombre'=>'required|min:3|max:20',
            'txtapellido'=>'required',
            'txtcorreo'=>'required|email:rfc,dns',
            'txttelefono'=>'required|numeric'
        ]);


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
