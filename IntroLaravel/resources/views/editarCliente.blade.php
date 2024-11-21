@extends('layouts.plantilla1')

@section('titulo', 'Editar Cliente')

@section('contenido')

<div class="container mt-5 col-md-6">
    <h2 class="text-center mb-4">Editar Cliente</h2>
    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="txtnombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="txtnombre" value="{{ $cliente->nombre }}">
            <small class="text-danger fst-italic">{{ $errors->first('txtnombre') }}</small>
        </div>
        <div class="mb-3">
            <label for="txtapellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" name="txtapellido" value="{{ $cliente->apellido }}">
            <small class="text-danger fst-italic">{{ $errors->first('txtapellido') }}</small>
        </div>
        <div class="mb-3">
            <label for="txtcorreo" class="form-label">Correo</label>
            <input type="text" class="form-control" name="txtcorreo" value="{{ $cliente->correo }}">
            <small class="text-danger fst-italic">{{ $errors->first('txtcorreo') }}</small>
        </div>
        <div class="mb-3">
            <label for="txttelefono" class="form-label">Teléfono</label>
            <input type="text" class="form-control" name="txttelefono" value="{{ $cliente->telefono }}">
            <small class="text-danger fst-italic">{{ $errors->first('txttelefono') }}</small>
        </div>

        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
</div>

@endsection
