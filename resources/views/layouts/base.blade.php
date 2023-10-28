<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="/images/TQ.jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>ToolQuick</title>
</head>
<body class="bg-light text-dark" style=" display: grid; min-height: 100vh; grid-template-rows: auto 1fr auto;">
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ff7c00; font-family: Arial, sans-serif;">
    <div class="container">
        <img src="/images/TQ-LOGO.png" alt="Logo" style="height: 40px; margin-right: 10px;">
        <a class="navbar-brand mx-auto" href="/" style="color: #fff; margin-right: 100px;">ToolQuick</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-light" href="/category">Categorías</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="/product">Productos</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-light" href="/partners">Socios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="/transaction">Transacciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="/details">Detalle de Transacción</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<footer style="background-color: #ff7c00; color: #fff; text-align: center; padding: 10px;">
    ToolQuick es una herramienta en fase de pruebas. Cualquier uso fuera de los lineamientos del equipo deslinda a estos últimos de cualquier responsabilidad.
</footer>
</body>
</html>
