<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Turista sin Maps</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: flex-end;
            justify-content: flex-end;
            background-image: url('img/Registro.jpg'); 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>

    <link rel="stylesheet" href="{{ asset('css/Registro.css') }}"> 
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="{{asset('img/Logo.png')}}" alt="Logo"> 
            <h1>Turista sin Maps</h1>
        </div>
        <h3>Registro</h3>   
        <div class="form-group">
            <input type="text" class="custom-input" placeholder="Nombre">
        </div>
        <div class="form-group">
            <input type="text" class="custom-input" placeholder="Apellidos">
        </div>
        <div class="form-group">
            <input type="text" class="custom-input" placeholder="Correo Electrónico">
        </div>
        <div class="form-group">
            <input type="text" class="custom-input" placeholder="Teléfono">
        </div>
        <div class="form-group">
            <input type="password" class="custom-input" placeholder="Contraseña">
        </div>
        <a href="">¿Ya tienes una cuenta?</a>
        <br>
        <br>
        <div class="btn-container">
            <button type="button">Registrar</button>    
        </div>
    </div>
</body>
</html>
