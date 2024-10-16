<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','POR DEFECTO')</title>
    
    <!-- Solo una versión de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" rel="stylesheet">
    
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="{{ asset('css/principal.css') }}">
    
    <!-- Estilos adicionales -->
    @stack('css')

    <style>
        /* Estilos para que el footer se mantenga en la parte inferior */
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        .content {
            flex: 1;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg fw-bold fs-8">
        <div class="container">
            <a class="navbar-brand" onclick="window.location.href='/principal'">Tienda Romero</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Consultar estados financieros
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" onclick="window.location.href='/balancegeneral'">Balance general</a></li>
                            <li><a class="dropdown-item" onclick="window.location.href='/estadoresultado'">Estados de resultados</a></li>
                            <li><a class="dropdown-item" onclick="window.location.href='/estadocapital'">Estado de capital</a></li>
                            <li><a class="dropdown-item" onclick="window.location.href='/balancecomprobacion'">Balance de comprobación</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="window.location.href='/registrodiario'">Ingresar asiento diario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="window.location.href='/consultarasientodiario'">Consultar asiento diario</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" onclick="window.location.href='{{url('users')}}'">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="window.location.href='/'">Cerrar sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container content @yield('extra-classes')" style="@yield('estilo-classes')">
        @yield('content')
    </div>

    <footer class="text-center py-4">
        <p>&copy; 2024 Mi Sitio Web. Todos los derechos reservados.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
