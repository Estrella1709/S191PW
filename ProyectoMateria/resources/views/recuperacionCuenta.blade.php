<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesión - Turista sin Maps</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: flex-start;
            justify-content: flex-start;
            background-image: url('img/inicioSesion1.jpg'); 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>

    <link rel="stylesheet" href="{{ asset('css/recuperacionCuenta.css') }}"> 
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="{{asset('img/Logo.png')}}" alt="Logo"> 
            <h1>Turista sin Maps</h1>
        </div>
        <h3>Recuperacion de Cuenta</h3>   
        <div class="form-group">
            <input type="text" class="custom-input" placeholder="Código">
        </div>
        <div class="form-group">
            <input type="password" class="custom-input" placeholder="Nueva contraseña">
        </div>
        <div class="form-group">
            <input type="password" class="custom-input" placeholder="Confirmar contraseña">
        </div>
        <a href="">Reenviar código</a>
        <br>
        <br>
        <div class="btn-container">
            <button type="button">Ingresar</button>
        </div>
    </div>
</body>
</html>
