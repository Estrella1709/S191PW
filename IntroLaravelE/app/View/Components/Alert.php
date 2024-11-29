<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
//mandamos a llamar el componente
use Illuminate\View\Component;

//php artisan make:component "nombre del componente"
//Se crean dos archivos, este es uno de ellos, la lógica del componente
class Alert extends Component
{

    //Declaramos las variables necesarias que tenga el componente y se modifiquen
    //en este caso es $tipo ya que solo cambiamos que tipo de alert es
    public $tipo;


    //En nuestro constructor ponemos la misma variable para utilizarla
    public function __construct($tipo)
    {

        //declaramos la variable de nuevo al estilo java, recordemos que esto depende de
        //cuantas variables tenemos, como en este ejemplo solo tenemos una solo lo hacemos una vez
        $this->tipo=$tipo;
    }

    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
