<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite (['resources/js/app.js'])

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Practica Repaso - Repaso 1</title>
</head>
<body>

    <div class="d-flex flex-column justify-content-center align-items-center text-center full-height"> 
    <h1>Convertidor</h1>
    <br>
    <h2>Esta es la vista repaso1</h2>
    <br>
    </div>

    <div class="d-flex flex-row justify-content-center align-items-center text-center full-height">
    
        <x-card-convertidor
            titulo="Convertidor de MB a GB"
            subtitulo="Ingresa un valor en MB para convertirlo a GB"
            placeholder="Ingresa valor en MB"
            ruta="convertidorMBGB"
            resultado="resultado_mb_gb"
        />

        <x-card-convertidor
            titulo="Convertidor de GB a MB"
            subtitulo="Ingresa un valor en GB para convertirlo a MB"
            placeholder="Ingresa valor en GB"
            ruta="convertidorGBMB"
            resultado="resultado_gb_mb"
        />

        <x-card-convertidor
            titulo="Convertidor de GB a TB"
            subtitulo="Ingresa un valor en GB para convertirlo a TB"
            placeholder="Ingresa valor en GB"
            ruta="convertidorGBTB"
            resultado="resultado_gb_tb"
        />

        <x-card-convertidor
            titulo="Convertidor de TB a GB"
            subtitulo="Ingresa un valor en TB para convertirlo a GB"
            placeholder="Ingresa valor en TB"
            ruta="convertidorTBGb"
            resultado="resultado_tb_gb"
        />

        
    </div>

</body>
</html>