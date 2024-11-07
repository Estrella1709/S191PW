<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen 2do Parcial - Utiles escolares</title>
</head>
<body>
    <h1>Utiles Escolares</h1>

    @if(session('exito'))

    <h5>{{ session('exito')}}</h5> 

    @endif

    <form method="POST" action="/procesarUtiles">
    @csrf
        
        Nombre: <input type="text" class="form-control" name="txtnombre" value="{{old('txtnombre')}}">
        <small class="text-danger fst-italic">{{ $errors->first('txtnombre') }}</small>
        

        
        Marca: <input type="text" class="form-control" name="txtmarca" value="{{old('txtmarca')}}">
        <small class="text-danger fst-italic">{{ $errors->first('txtmarca') }}</small>
        
    
        
        Cantidad: <input type="text" class="form-control" name="txtcantidad" value="{{old('txtcantidad')}}">
        <small class="text-danger fst-italic">{{ $errors->first('txtcantidad') }}</small>
        
    
    <button type="submit">Guardar Utiles</button>
    </form>
    
</body>
</html>