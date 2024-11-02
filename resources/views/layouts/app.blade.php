<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/principal.css') }}">
    @stack('css')
</head>
<body>  
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="/principal">Tienda Romero</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        
                        @if (isset($usuario))
                            @php
                                $permisos = $usuario->tblPermiso;
                            @endphp

                            @if ($permisos->consultarEstadosFinancieros ?? false)
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Estados Financieros
                                    </a>
                                    <ul class="dropdown-menu">
                                        @if ($permisos->consultarCuentasT ?? false)
                                            <li><a class="dropdown-item" href="#">Cuentas T</a></li>
                                        @endif
                                        @if ($permisos->consultarEstadosFinancieros ?? false)
                                            <li><a class="dropdown-item" href="/balancegeneral">Balance General</a></li>
                                            <li><a class="dropdown-item" href="/estadoresultado">Estado De Resultados</a></li>
                                            <li><a class="dropdown-item" href="/estadocapital">Estado De Capital</a></li>
                                            <li><a class="dropdown-item" href="{{route('bal_comprobacion.index')}}">Balance De Comprobacion</a></li>
                                        @endif
                                    </ul>
                                </li>
                            @endif

                            @if ($permisos->ingresarRegistroDiario ?? false || $permisos->consultarRegistroDiario ?? false)
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Asientos Diarios
                                    </a>
                                    <ul class="dropdown-menu">
                                        @if ($permisos->ingresarRegistroDiario ?? false)
                                            <li><a class="dropdown-item" href="{{route('asiento_diario.insertar')}}">Ingresar Asiento Diario</a></li>
                                        @endif
                                        @if ($permisos->consultarRegistroDiario ?? false)
                                            <li><a class="dropdown-item" href="{{route('asiento_diario.index')}}">Consultar Asientos Diarios</a></li>
                                        @endif
                                    </ul>
                                </li>
                            @endif
                            
                            @if ($permisos->crearUsuarios ?? false || $permisos->gestionarPermisos ?? false)
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Administración
                                    </a>
                                    <ul class="dropdown-menu">
                                        @if ($permisos->crearUsuarios ?? false)
                                            <li><a class="dropdown-item" href="users">Usuarios</a></li>
                                        @endif
                                        @if ($permisos->gestionarPermisos ?? false)
                                            <li><a class="dropdown-item" href="tbl-permisos">Permisos</a></li>
                                        @endif
                                    </ul>
                                </li>
                            @endif
                            
                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}">Cerrar Sesión</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="/login">Iniciar Sesión</a>
                            </li>
                        @endif

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    <div class="container content @yield('extra-classes')" style="@yield('estilo-classes')">
        @yield('content')
    </div>

    <footer class="text-center py-4">
        <p>&copy; 2024 Mi Sitio Web. Todos los derechos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
