<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorLibro extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'txtisbn'=>'required|numeric',
            'txttitulo'=>'required',
            'txtautor'=>'required|min: 5',
            'txtpaginas'=>'required|numeric',
            'txtanio'=>'required|date',
            'txteditorial'=>'required|min: 10|max: 100',
            'txtemaileditorial'=>'required|email:rfc,dns'

        ];
    }
}
