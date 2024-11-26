@extends('layouts.plantilla1')

@section('titulo', 'Clientes')

@section('contenido')

@if(session('success'))
    <script>
        Swal.fire({
            imageUrl: '{{ asset('img/logo.png')}}',
            imageWidth: 150,
            imageHeight: 150,
            imageAlt: 'Imagen de éxito',
            title: '<h3 style="color:#7fe2f1;">¡Operación Exitosa!</h3>',
            html: `<p style="font-size: 18px; color: #ffffff;">{{ session('success') }}</p>`,
            confirmButtonText: 'Entendido',
            background: '#398F9D',
            color: '#7fe2f1',
            confirmButtonColor: '#7fe2f1',
        });
    </script>
@endif


<div class="container mt-5 col-md-8">
    @foreach ($consultaClientes as $cliente)
        <div class="card text-justify font-monospace mt-3">
            <div class="card-header fs-5 text-primary">
                {{ $cliente->nombre }} {{ $cliente->apellido }}
            </div>

            <div class="card-body">
                <h5 class="fw-bold">{{ $cliente->correo }}</h5>
                <h5 class="fw-medium">{{ $cliente->telefono }}</h5>
            </div>

            <div class="card-footer text-muted">
                <!-- manda a llamar la ruta de actualizar, tambien en la variable $cliente guarda el id, es decir si tomamos el id 2, sera /cliente/2/edit, en la ruta -->
                <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning btn-sm">Actualizar</a>
                <!-- Manda a llamar la ruta de destroy, para borrar, igual toma el id del cliente y lo guarda en la variable $cliente -->
                 <!-- Metemos esto en un formulario ya que haremos un metodo post y aparte se especifica que es una eliminación -->
                <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" class="d-inline eliminar-cliente-form">
                    @csrf
                    <!-- especificación de que el metodo es una eliminación -->
                    @method('DELETE')
                    <button type="button" class="btn btn-danger btn-sm btn-eliminar" data-id="{{ $cliente->id }}">Eliminar</button>
                </form>
            </div>
        </div>
    @endforeach
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {

        //boton de eliminar
        const eliminarBotones = document.querySelectorAll('.btn-eliminar');

        //alerta de si estas seguro de eliminar el dato
        eliminarBotones.forEach(boton => {
            boton.addEventListener('click', function () {
                const form = this.closest('form');

                Swal.fire({
                    title: '¿Estás segura?',
                    text: "¡No podrás revertir esto!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí, eliminar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    //confirmación de eliminación
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    });
</script>

@endsection
