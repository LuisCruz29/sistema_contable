<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Asiento Diario - Tienda Romero</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/principal.css') }}">

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
                        <a class="nav-link" onclick="window.location.href='/'">Cerrar sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5 section" style="max-width: 1200px; margin: 0 auto;">
        
        <p class="text-center fw-bold fs-3">Bienvenido a nuestro sistema contable. A continuación, te presentamos algunas características clave que facilitan la gestión de tus finanzas.</p>
        
        <div class="row d-flex justify-content-center">
            <div class="col-md-4 mb-4 d-flex align-items-stretch">
                <div class="card p-4 text-center">
                    <div class="feature-icon">
                        <i class="bi bi-file-earmark-text"></i>
                    </div>
                    <h4>Registro Sencillo</h4>
                    <p>Ingresa tus asientos diarios de manera rápida y fácil. Nuestro sistema está diseñado para que no pierdas tiempo en procesos complicados.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4 d-flex align-items-stretch">
                <div class="card p-4 text-center">
                    <div class="feature-icon">
                        <i class="bi bi-check-circle"></i>
                    </div>
                    <h4>Validación Automática</h4>
                    <p>Recibe notificaciones y validaciones en tiempo real, asegurando que tus registros sean precisos y completos.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4 d-flex align-items-stretch">
                <div class="card p-4 text-center">
                    <div class="feature-icon">
                        <i class="bi bi-bar-chart-line"></i>
                    </div>
                    <h4>Informes Personalizados</h4>
                    <p>Genera informes contables personalizados que te ayudarán a tomar decisiones informadas para tu negocio.</p>
                </div>
            </div>
        </div>
    
        <div class="row d-flex justify-content-center">
            <div class="col-md-4 mb-4 d-flex align-items-stretch">
                <div class="card p-4 text-center">
                    <div class="feature-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                    <h4>Seguridad y Privacidad</h4>
                    <p>Tu información está protegida con los más altos estándares de seguridad. Nos tomamos muy en serio la privacidad de tus datos.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4 d-flex align-items-stretch">
                <div class="card p-4 text-center">
                    <div class="feature-icon">
                        <i class="bi bi-phone"></i>
                    </div>
                    <h4>Soporte al Cliente</h4>
                    <p>Contamos con un equipo de soporte disponible para ayudarte en cualquier momento. Estamos aquí para ti.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4 d-flex align-items-stretch">
                <div class="card p-4 text-center">
                    <div class="feature-icon">
                        <i class="bi bi-gear"></i>
                    </div>
                    <h4>Fácil de Usar</h4>
                    <p>Interfaz intuitiva y fácil de usar que te permite gestionar tu contabilidad sin complicaciones.</p>
                </div>
            </div>
        </div>
    </div>
    <footer class="text-center fw-bold">
        <p>&copy; 2024 Tienda Romero. Todos los derechos reservados.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
