<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{ asset('css/plantilla.css') }}">
</head>
<body>
    <header class="container">
        <h1>Sabiduría Infinita</h1>
        <section>
            <a href="{{ route('rutaHome')}}"><h2 id="home">Inicio</h2></a>
            <a href="{{ route('rutaRegistroLibro')}}"><h2 id="registroLibro">Registro Libro</h2></a>
        </section>
    </header> 
    @yield('contenido')
    <footer>
        <div class="footer-content">
        <div>
            <h3>Sabiduría Infinita</h3>
        </div>
        <div>
            <p>31-10-2024</p>
        </div>
        </div>
        <div class="footer-bottom">
        <p>&copy; 2024 Sabiduría Infinita. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>