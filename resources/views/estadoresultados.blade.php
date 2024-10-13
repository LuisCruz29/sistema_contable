<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estado de Resultados - Tienda Romero</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/estadoresultados.css') }}">

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
        <h2>Estado de Resultados</h2>
        <div class="balance-container">
            <div class="balance-section">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Descripción</th>
                            <th>Monto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Ingresos -->
                        <tr>
                            <td class="gastos">Ingresos</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Ventas</td>
                            <td>$20,000</td>
                        </tr>
                        <tr>
                            <td>Ingresos por servicios</td>
                            <td>$5,000</td>
                        </tr>
                        <tr><td colspan="2">&nbsp;</td></tr> <!-- Fila en blanco -->
                        <tr class="totales">
                            <td>Total de Ingresos</td>
                            <td>$25,000</td>
                        </tr>
                        <tr class="sangria"><td colspan="2">&nbsp;</td></tr> <!-- Sangría arriba del total -->
                        <tr><td colspan="2">&nbsp;</td></tr> <!-- Fila en blanco -->

                        <!-- Gastos -->
                        <tr>
                            <td class="gastos">Menos</td>
                        </tr>
                        <tr>
                            <td class="gastos">Gastos</td>
                            <td></td> <!-- Columna vacía -->
                        </tr>
                        <tr>
                            <td>Alquiler</td>
                            <td>$3,000</td>
                        </tr>
                        <tr>
                            <td>Sueldos</td>
                            <td>$10,000</td>
                        </tr>
                        <tr>
                            <td>Servicios públicos</td>
                            <td>$1,500</td>
                        </tr>
                        <tr><td colspan="2">&nbsp;</td></tr> <!-- Fila en blanco -->
                        <tr class="totales">
                            <td>Total de Gastos</td>
                            <td>$14,500</td>
                        </tr>
                        <tr class="sangria"><td colspan="2">&nbsp;</td></tr> <!-- Sangría arriba del total -->
                        <tr><td colspan="2">&nbsp;</td></tr> <!-- Fila en blanco -->

                        <!-- Utilidad Total -->
                        <tr class="totales">
                            <td>Utilidad Total</td>
                            <td>$10,500</td>
                        </tr>
                    </tbody>
                </table>
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
