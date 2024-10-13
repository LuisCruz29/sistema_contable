<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Asiento Diario - Tienda Romero</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/consultarasientodiario.css') }}">

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

    <div class="container my-5">
        <h2>Consulta de Asientos Diarios</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Código Transacción</th>
                    <th>Fecha</th>
                    <th>ID Cuenta</th>
                    <th>Debe</th>
                    <th>Haber</th>
                    <th>ID Empleado</th>
                    <th>Descripción</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>TRN001</td>
                    <td>01/01/2024</td>
                    <td>1010</td>
                    <td>$1,000</td>
                    <td>$0</td>
                    <td>EMP001</td>
                    <td>Venta de productos</td>
                </tr>
                <tr>
                    <td>TRN002</td>
                    <td>01/01/2024</td>
                    <td>2020</td>
                    <td>$0</td>
                    <td>$500</td>
                    <td>EMP002</td>
                    <td>Pago de sueldos</td>
                </tr>
                <tr>
                    <td>TRN003</td>
                    <td>02/01/2024</td>
                    <td>1030</td>
                    <td>$300</td>
                    <td>$0</td>
                    <td>EMP003</td>
                    <td>Compra de mercancía</td>
                </tr>
                <tr>
                    <td>TRN004</td>
                    <td>03/01/2024</td>
                    <td>3030</td>
                    <td>$0</td>
                    <td>$700</td>
                    <td>EMP004</td>
                    <td>Servicios prestados</td>
                </tr>
            </tbody>
        </table>
    </div>

    <footer class="text-center fw-bold">
        <p>&copy; 2024 Tienda Romero. Todos los derechos reservados.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
