<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    //Como se ve aqui estan más variables, porque es lo que cambia en el componente
    public $encabezado;
    public $titulo;
    public $textoBoton;

    //volvemos a poner las variables
    public function __construct($encabezado, $titulo, $textoBoton)
    {

        //de nuevo las declaramos dentro del constructor
        $this->encabezado= $encabezado;
        $this->titulo= $titulo;
        $this->textoBoton= $textoBoton;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
