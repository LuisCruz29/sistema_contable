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
                        
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Estados Financieros
                                </a>
                                <ul class="dropdown-menu">
                                    @if (session('user')->tblPermiso->consultarCuentasT)
                                        <li><a class="dropdown-item" href="{{route('cuentasT.index')}}">Cuentas T</a></li>
                                    @endif
                                    @if (session('user')->tblPermiso->consultarEstadosFinancieros)
                                        <li><a class="dropdown-item" href="/balancegeneral">Balance General</a></li>
                                        <li><a class="dropdown-item" href="/estadoresultado">Estado De Resultados</a></li>
                                        <li><a class="dropdown-item" href="/estadocapital">Estado De Capital</a></li>
                                        <li><a class="dropdown-item" href="{{route('bal_comprobacion.index')}}">Balance De Comprobacion</a></li>
                                    @endif
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Asientos Diarios
                                </a>
                                <ul class="dropdown-menu">
                                    @if (session('user')->tblPermiso->ingresarRegistroDiario)
                                        <li><a class="dropdown-item"  href="{{route('tbl-registro-diario.create')}}">Ingresar Asiento Diario</a></li>
                                    @endif
                                    @if (session('user')->tblPermiso->consultarRegistroDiario)
                                        <li><a class="dropdown-item" href="{{route('tbl-registro-diario.index')}}">Consultar Asientos Diarios</a></li>
                                    @endif
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Administración
                                </a>
                                <ul class="dropdown-menu">
                                    @if (session('user')->tblPermiso->crearUsuarios)
                                        <li><a class="dropdown-item" href="{{route('users.index')}}">Usuarios</a></li>
                                    @endif
                                    @if (session('user')->tblPermiso->gestionarPermisos)
                                        <li><a class="dropdown-item" href="{{route('tbl-permisos.index')}}">Permisos</a></li>
                                    @endif
                                    <li><a class="dropdown-item" href="{{route('tbl-cuentas.index')}}">Cuentas</a></li>

                                </ul>
                            </li>                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}">Cerrar Sesión</a>
                            </li>
                      

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
