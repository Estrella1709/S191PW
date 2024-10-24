<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorRepaso extends Controller
{
    
    public function portada(){
        return view('portada');
    }

    public function repaso1(){
        return view('repaso1');
    }

    public function convertidorMBGB(Request $request){
        // Validar que el valor ingresado sea un número
        $request->validate([
            'valor' => 'required|numeric'
        ]);
    
        //el input valor es el valor que obtengo del formulario al cual estamos llenando
        //en este caso el valor numerico que ingresamos
        $mb = $request->input('valor');

        //operación
        $gb = $mb / 1024;
    
        //redirect()->back(): Es lo que nos va a redirigir a la vista repaso 1 al momento de mostrar el resultado
        //with(): nos enviara datos temporales, es decir los resultados, estos son como "flashes"
        return redirect()->back()->with('resultado_mb_gb', "La conversión de $mb MB a GB es: $gb GB");
    }

    public function convertidorGBMB(Request $request){

        $request->validate([
            'valor' => 'required|numeric'
        ]);
    
        $gb = $request->input('valor');
        $mb = $gb * 1024;
    
        return redirect()->back()->with('resultado_gb_mb', "La conversión de $gb GB a MB es: $mb MB");

    }
    
    public function convertidorGBTB(Request $request){
        
        $request->validate([
            'valor' => 'required|numeric'
        ]);
    
        $gb = $request->input('valor');
        $tb = $gb / 1024;
    
        return redirect()->back()->with('resultado_gb_tb', "La conversión de $gb GB a TB es: $tb TB");
    }
    
    public function convertidorTBGb(Request $request){

        $request->validate([
            'valor' => 'required|numeric'
        ]);
    
        $tb = $request->input('valor');
        $gb = $tb * 1024;
    
        return redirect()->back()->with('resultado_tb_gb', "La conversión de $tb TB a GB es: $gb GB");
    }



}
