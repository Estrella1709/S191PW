@extends('layouts.plantilla')

@section('contenido')
    <link rel="stylesheet" href="{{ asset('css/registroLibro.css') }}">
    <div class="form-container">
    <h2 class="tituloform">Formulario de Registro de Libro</h2>
    <form>
        <div class="form-group">
        <label for="isbn">ISBN</label>
        <input type="text" id="isbn" name="isbn" required>
        </div>
        <div class="form-group">
        <label for="titulo">Título</label>
        <input type="text" id="titulo" name="titulo" required>
        </div>
        <div class="form-group">
        <label for="autor">Autor</label>
        <input type="text" id="autor" name="autor" required>
        </div>
        <div class="form-group">
        <label for="paginas">Páginas</label>
        <input type="text" id="paginas" name="paginas" required>
        </div>
        <div class="form-group">
        <label for="anio">Año</label>
        <input type="text" id="anio" name="anio" required>
        </div>
        <div class="form-group">
        <label for="editorial">Editorial</label>
        <input type="text" id="editorial" name="editorial" required>
        </div>
        <div class="form-group">
        <label for="email-editorial">Email de Editorial</label>
        <input type="text" id="email-editorial" name="email-editorial" required>
        </div>
        <input type="submit" value="Registrar Libro">
    </form>
    </div>
@endsection