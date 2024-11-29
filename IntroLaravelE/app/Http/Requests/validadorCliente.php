<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorCliente extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //siempre debe estar en true para que funcionen las validaciones
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    //Validaciones de los inputs
    public function rules(): array
    {
        return [
            
            //Se hace validacion en cada input, primero el nombre del input en este caso
            //los txt's seguidos de la validacion, el "required" es default para que si o si
            //se llene el campo, se pone una nueva validación con un "|" 
            'txtnombre'=>'required|min:3|max:20',
            'txtapellido'=>'required',
            'txtcorreo'=>'required|email:rfc,dns',
            'txttelefono'=>'required|numeric'
            
        ];
    }
}
