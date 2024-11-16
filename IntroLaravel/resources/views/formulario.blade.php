
{{-- mandamos a llamar la plantilla que ocupamos, primero va el nombre de la carpeta luego el nombre del archivo --}}  
   @extends('layouts.plantilla1')

{{-- creamos una seccion para darle un nombre al titulo, el primer parametro es la variable y el segundo el titulo que lleva la vista --}}
        @section('titulo', 'Formulario Clientes')
        
{{-- La siguiente seccion viene la variable contenido, que donde va a estar lo que tiene nuestra vista, en este caso un formulario --}}
        @section('contenido')

            {{-- inicia Tarjeta con formulario --}}

            <div class="container mt-5 col-md-6">
                {{-- @dump($id) --}}

{{-- este if es para que se muestre nuestro componente, ponemos "Session" porque es la session que esta en el controlador, y le ponemos exito, es decir si todo es exito, sale el alert --}}
                @if(session('exito'))
    {{-- colocamos un echo para que ahi de muestre lo que tiene nuestro controlador concatenado con "exito" --}}
    {{-- tambien en "tipo" es la variable que declaramos en el componente, es decir ahi cambia el tipo--}}
                <x-Alert tipo="success"> {{ session('exito')}}</x-Alert> 
                @endif

                @session('exito')
                <x-Alert tipo="warning"> {{ $value}}</x-Alert> 
                @endsession

    {{-- este value esta en el controlador--}}
                @session('exito')
                    <script>
                        Swal.fire({
                        title: "Respuesta del servidor",
                        text: '{{$value}}',
                        icon: "success"
                        });
                    </script>
                @endsession

                

                <div class="card font-monospace">
                    <div class="card-header fs-5 text-center text-primary">
                        {{ __('Registro Clientes')}}
                    </div>
                    <div class="card-body text-justify">

                {{--el formulario le ponemos el metodo post y la accion, la accion es la ruta que se define en el web --}}
                        <form method="POST" action="{{ route('rutaenviar')}}">
                {{-- es necesario el csrf --}}
                            @csrf 
                            
                            {{-- los input deben estar dentro del form, tambien tipo text y deben tener un name, el value es pa mantener los datos --}}
                            <div class="mb-3">
                                {{-- sintaxis para traducción --}}
                                <label for="nombre" class="form-label">{{ __('Nombre')}}:</label>
                                <input type="text" class="form-control" name="txtnombre" value="{{old('txtnombre')}}">
                                {{-- mensaje de error segun la validacion --}}
                                <small class="text-danger fst-italic">{{ $errors->first('txtnombre') }}</small>
                            </div>
                            <div class="mb-3">
                                <label for="apellido" class="form-label">{{ __('Apellido')}}:</label>
                                <input type="text" class="form-control" name="txtapellido" value="{{old('txtapellido')}}">
                                <small class="text-danger fst-italic">{{ $errors->first('txtapellido') }}</small>
                            </div>
                            <div class="mb-3">
                                <label for="correo" class="form-label">{{ __('Correo')}}:</label>
                                <input type="text" class="form-control" name="txtcorreo" value="{{old('txtcorreo')}}">
                                <small class="text-danger fst-italic">{{ $errors->first('txtcorreo') }}</small>
                            </div>
                            <div class="mb-3">
                                <label for="telefono" class="form-label">{{ __('Teléfono')}}:</label>
                                <input type="text" class="form-control" name="txttelefono" value="{{old('txttelefono')}}">
                                <small class="text-danger fst-italic">{{ $errors->first('txttelefono') }}</small>
                            </div>
                            <div class="card-footer text-muted">
                                <div class="d-grid gap-2 mt-2 mb-1">
                                    {{-- si o si tiene que ser un button --}}
                                    <button type="submit" class="btn btn-success btn-sm">{{ __('Guardar Cliente')}}</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            {{-- finaliza Tarjeta con formulario --}}
        @endsection