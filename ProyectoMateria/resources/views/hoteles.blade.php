<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/plantilla1.css') }}"> 
    <style>
        body{
            font-family: 'Arial', sans-serif;
            margin: 0;
            background-color: #efefef;
        }
    </style>
</head>
<body>
    <header class="container">
        
        <h1><img id="logo" src="{{ asset('img/Logo.png') }}"> Turista sin Maps</h1>
        <section>
            <a href="#"><h2 id="hoteles">Hoteles</h2></a>
            <a href="#"><h2 id="vuelos">Vuelos</h2></a>
        </section>
    </header> 

</body>
</html>