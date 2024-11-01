@extends('layouts.plantilla')

@section('contenido')
    <link rel="stylesheet" href="{{ asset('css/registroLibro.css') }}">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <div class="form-container">
        <h2 class="tituloform">Formulario de Registro de Libro</h2>
        <form method="POST" action="{{ route('rutaProcesarLibro') }}">
            @csrf
            <div class="form-group">
                <label for="isbn">ISBN</label>
                <input type="text" name="txtisbn" value="{{old('txtisbn')}}">
                <small>{{ $errors->first('txtisbn') }}</small>
            </div>

            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" name="txttitulo" value="{{old('txttitulo')}}">
                <small>{{ $errors->first('txttitulo') }}</small>
            </div>

            <div class="form-group">
                <label for="autor">Autor</label>
                <input type="text" name="txtautor" value="{{old('txtautor')}}">
                <small>{{ $errors->first('txtautor') }}</small>
            </div>

            <div class="form-group">
                <label for="paginas">Páginas</label>
                <input type="text" name="txtpaginas" value="{{old('txtpaginas')}}">
                <small>{{ $errors->first('txtpaginas') }}</small>
            </div>

            <div class="form-group">
                <label for="anio">Año</label>
                <input type="text" name="txtanio" value="{{old('txtanio')}}">
                <small>{{ $errors->first('txtanio') }}</small>
            </div>

            <div class="form-group">
                <label for="editorial">Editorial</label>
                <input type="text" name="txteditorial"  value="{{old('txteditorial')}}">
                <small>{{ $errors->first('txteditorial') }}</small>
            </div>

            <div class="form-group">
                <label for="emaileditorial">Email de Editorial</label>
                <input type="text" name="txtemaileditorial" value="{{old('txtemaileditorial')}}">
                <small>{{ $errors->first('txtemaileditorial') }}</small>
            </div>

            <input type="submit" value="Registrar Libro">
        </form>
    </div>

    @if(session('exito'))
            <script>
            document.addEventListener('DOMContentLoaded', function() {
                alertify.success(`
                    <div style="text-align: left; line-height: 1.5;">
                        {!! nl2br(e(session('exito'))) !!}
                    </div>
                `);
            });
            </script>
    @endif
@endsection
