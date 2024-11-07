<?php

        //Respuesta a nuestra petición POST
        //return 'La info del cliente llego al controlador';
        //return $peticion->ip();
        //return $peticion->path();
        //return $peticion->url(); 
        //return $peticion->all();  

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//si hay validador, mandamos a llamar el request
use App\Http\Requests\validadorCliente;

class controladorVistas extends Controller
{
    
    //Declaracion de función para una vista
    public function home(){
        //nombre de la vista en .blade.php
        return view('inicio');
    }

    public function insert(){
        return view('formulario');
    }

    public function select(){
        return view('clientes');
    }

    //Función para las peticiones y los requests, primer parametro es el request
    //el segundo es la variable donde se van a guardar los datos del input
    //php artisan make:request 'nombre del request'
    public function procesarCliente(validadorCliente $peticion){

        //return redirect('/');
        //return redirect()->route('rutaconsulta');
        //return back();

        //$id=[['usuario'=>'1'],['usuario'=>'2']];
        //return view('formulario', compact('id'));

        //declaramos variable para el input y ponemos $peticion para que lo guarde ahi
        //el input debe tener el nombre que tiene en la vista formulario, en este caso txtnombre
        $usuario= $peticion->input('txttelefono');

        //este es el $value que se usa para mostrar en los alerts
        //primer parametro 'exito' para que si se guarda correctamente mande exito
        //segundo es mensaje para el usuario, que se encontrara en el alert
        //tercero es la concatenacion con un punto "." y la variable que guardamos, en este caso usuario
        session()->flash('exito', 'Se guardo el usuario: '. $usuario);
                        //primer parametro es la llave, el segundo es el mensaje
        
        //Devuelve la ruta a la que estamos, con el APODO de la ruta
        return to_route('rutacacas');



    }
}
