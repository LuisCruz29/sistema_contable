<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Asiento Diario - Tienda Romero</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/registrodiario.css') }}">

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

    <div class="container my-5" style="max-width: 800px;">
        <h2>Registrar Asiento Diario</h2>
        
        <form>
            <div class="mb-3">
                <label for="codigoTransaccion" class="form-label">Código Transacción</label>
                <input type="text" class="form-control" id="codigoTransaccion" placeholder="Ingrese el código de la transacción" required>
            </div>
            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="date" class="form-control" id="fecha" required>
            </div>
            <div class="mb-3">
                <label for="idCuenta" class="form-label">ID Cuenta</label>
                <input type="text" class="form-control" id="idCuenta" placeholder="Ingrese el ID de la cuenta" required>
            </div>
            <div class="mb-3">
                <label for="debe" class="form-label">Debe</label>
                <input type="number" class="form-control" id="debe" placeholder="Ingrese el monto a debitar" required>
            </div>
            <div class="mb-3">
                <label for="haber" class="form-label">Haber</label>
                <input type="number" class="form-control" id="haber" placeholder="Ingrese el monto a acreditar" required>
            </div>
            <div class="mb-3">
                <label for="idEmpleado" class="form-label">ID Empleado</label>
                <input type="text" class="form-control" id="idEmpleado" placeholder="Ingrese el ID del empleado" required>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" rows="3" placeholder="Descripción del asiento" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Registrar Asiento</button>
        </form>
    </div>

    <footer class="text-center fw-bold">
        <p>&copy; 2024 Tienda Romero. Todos los derechos reservados.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
