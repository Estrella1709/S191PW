<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorLibro;

class controladorVistas extends Controller
{
    
    public function home(){
        return view('home');
    }

    public function registroLibro(){
        return view('registroLibro');
    }

    public function procesarLibro(validadorLibro $peticion) {
        
        $isbn = $peticion->input('txtisbn');
        $titulo = $peticion->input('txttitulo');
        $autor = $peticion->input('txtautor');
        $paginas = $peticion->input('txtpaginas');
        $anio = $peticion->input('txtanio');
        $editorial = $peticion->input('txteditorial');
        $emaileditorial = $peticion->input('txtemaileditorial');
    
        $mensajeTotal = "📚 Registro de Libro Completado 📚\n\n" .
                    "📕 ISBN: $isbn\n" .
                    "📗 Título: $titulo\n" .
                    "📘 Autor: $autor\n" .
                    "📙 Páginas: $paginas\n" .
                    "📅 Año: $anio\n" .
                    "🏢 Editorial: $editorial\n" .
                    "📧 Email de la Editorial: $emaileditorial";
    
        session()->flash('exito', $mensajeTotal);
    
        return redirect()->back();
    }
    



}
