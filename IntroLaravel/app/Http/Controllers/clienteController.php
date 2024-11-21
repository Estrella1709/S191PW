<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //importacion QueryBuilder
use Carbon\Carbon; //Nos da la hora y fecha del servidor
use App\Http\Requests\validadorCliente;


class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     //Vista de la pantalla de inicio
    public function home(){
        //nombre de la vista en .blade.php
        return view('inicio');
    }

    //Aqui va la consulta directa a la base de datos, en este caso consultamos clientes
    public function index()
    {
        $consultaClientes = DB::table('cliente')->get();
        return view('clientes', compact('consultaClientes'));
    }

    /**
     * Vista donde se hará el insert, el formulario
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Aquí preparo el Insert junto con su validación
     */
    public function store(validadorCliente $request)
    {
        DB::table('cliente')->insert([
            "nombre"=>$request->input('txtnombre'),
            "apellido"=>$request->input('txtapellido'),
            "correo"=>$request->input('txtcorreo'),
            "telefono"=>$request->input('txttelefono'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]); 

        $usuario= $request->input('txtnombre');
        session()->flash('exito', 'Se guardo el usuario: '. $usuario);
        return to_route('rutacacas');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Consulta la tabla cliente para encontrar el registro cuyo campo id coincida con el valor pasado como parámetro $id.
     * Usa el método first() para obtener un único registro.
     */
    public function edit(string $id){

        $cliente = DB::table('cliente')->where('id', $id)->first();
        return view('editarCliente', compact('cliente'));
    }

    /**
     * Busca el registro en la tabla cliente cuyo id coincida con $id.
     * Actualiza los campos con los datos recibidos del formulario
     */
    public function update(validadorCliente $request,string $id){
    // Validación y actualización
        DB::table('cliente')->where('id', $id)->update([
        "nombre" => $request->input('txtnombre'),
        "apellido" => $request->input('txtapellido'),
        "correo" => $request->input('txtcorreo'),
        "telefono" => $request->input('txttelefono'),
        "updated_at" => Carbon::now(),
        ]);

        $usuario= $request->input('txtnombre');
        return redirect()->route('rutaconsulta')->with('success', 'Se ha actualizado correctamente el cliente: '. $usuario );
    }

    /**
     * Busca el registro en la tabla cliente cuyo campo id coincida con $id y lo elimina.
     */
    public function destroy($id){

        DB::table('cliente')->where('id', $id)->delete();
        return redirect()->route('rutaconsulta')->with('success', 'Se ha borrado correctamente el cliente.');
    }
}
