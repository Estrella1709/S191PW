<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardConvertidor extends Component
{
    public $titulo;
    public $subtitulo;
    public $placeholder;
    public $ruta;
    public $resultado;

    public function __construct($titulo, $subtitulo, $placeholder, $ruta, $resultado)
    {
        $this->titulo = $titulo;
        $this->subtitulo = $subtitulo;
        $this->placeholder = $placeholder;
        $this->ruta = $ruta;
        $this->resultado = $resultado;
    }

    public function render()
    {
        return view('components.card-convertidor');
    }
}
