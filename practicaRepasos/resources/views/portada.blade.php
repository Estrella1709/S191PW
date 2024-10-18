<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    @vite (['resources/js/app.js'])

    
    <title>Practica repaso - Portada</title>
</head>
<body>

    
        <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="{{ asset('img/gato2.jpg') }}" class="d-block w-100" style="height: 500px; object-fit: cover;" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Hola esto es una portada
                </h5>
                <p>Estrella Aguillon Torrijos</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="{{ asset('img/gato.jpg') }}" class="d-block w-100" style="height: 500px; object-fit: cover;" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Aprendi a poner imagenes</h5>
                <p>Grupo S191</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="{{ asset('img/gato1.jpg') }}" class="d-block w-100" style="height: 500px; object-fit: cover;" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Y a mandar a llamarlas</h5>
                <p>Materia: Programación web</p>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>

        <br>
        <div class="d-grid gap-2 col-6 mx-auto">

            <a class="btn btn-primary" href="/repaso1">Repaso 1</a>
            
        </div>

        
</body>
</html>