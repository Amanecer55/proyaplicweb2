<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Título dinámico para la pestaña del navegador --}}
    <title>@yield('titulo', 'Sistema de Nómina')</title> 
    
    {{-- CORRECCIÓN CRÍTICA: Eliminada la 'x' en integrity --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    {{-- COMIENZA LA BARRA DE NAVEGACIÓN --}}
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('inicio') }}">Sistema de Nómina</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('inicio') }}">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Catálogos</a>
                        <div class="dropdown-menu">
                            {{-- Rutas de tu proyecto --}}
                            <a class="dropdown-item" href="{{route('altaempleado')}}">Alta de Empleados</a>
                            <a class="dropdown-item" href="{{route('reporteempleados')}}">Reporte de Empleados</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Otros</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cerrar sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- TERMINA LA BARRA DE NAVEGACIÓN --}}

    {{-- AQUI SE INSERTA EL CONTENIDO DE LA VISTA HIJA --}}
    <main class="container mt-4">
        @yield('contenido')
    </main>

    {{-- SCRIPTS (Bootstrap JS y jQuery) --}}
    {{-- CORRECCIÓN CRÍTICA: Eliminada la 'x' en integrity --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</body>
</html>