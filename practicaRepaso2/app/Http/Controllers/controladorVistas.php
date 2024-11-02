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
    
        $mensajeTotal = "📚 " . __('messages.registro_completado') . " 📚\n\n" .
                "📕 " . __('messages.isbn') . ": $isbn\n" .
                "📗 " . __('messages.titulo') . ": $titulo\n" .
                "📘 " . __('messages.autor') . ": $autor\n" .
                "📙 " . __('messages.paginas') . ": $paginas\n" .
                "📅 " . __('messages.anio') . ": $anio\n" .
                "🏢 " . __('messages.editorial') . ": $editorial\n" .
                "📧 " . __('messages.email_editorial') . ": $emaileditorial";

    
        session()->flash('exito', $mensajeTotal);
    
        return redirect()->back();
    }
    



}
