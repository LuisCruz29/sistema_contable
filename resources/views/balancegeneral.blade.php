<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balance General - Tienda Romero</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/balancegeneral.css') }}">

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
        <h2>Balance General</h2>
        <div class="balance-container">
            <!-- Activos -->
            <div class="balance-section">
                <h4 class="fw-bold">Activos</h4>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Descripción</th>
                            <th>Monto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Efectivo</td>
                            <td>$10,000</td>
                        </tr>
                        <tr>
                            <td>Inventarios</td>
                            <td>$5,000</td>
                        </tr>
                        <tr>
                            <td>Cuenta por cobrar</td>
                            <td>$3,000</td>
                        </tr>
                        <tr class="depreciacion">
                            <td class="sangria">Menos: Depreciación acumulada</td>
                            <td class="sangria">($2,000)</td>
                        </tr>
                        <tr><td colspan="2">&nbsp;</td></tr> <!-- Fila en blanco -->
                        <tr class="totales">
                            <td>Total de Activos</td>
                            <td>$16,000</td>
                        </tr>
                        <tr><td colspan="2">&nbsp;</td></tr> <!-- Fila en blanco -->
                    </tbody>
                </table>
            </div>

            <!-- Pasivos y Capital -->
            <div class="balance-section">
                <h4 class="fw-bold">Pasivos y Capital</h4>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Descripción</th>
                            <th>Monto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Deuda a corto plazo</td>
                            <td>$4,000</td>
                        </tr>
                        <tr>
                            <td>Proveedores</td>
                            <td>$2,000</td>
                        </tr>
                        <tr><td colspan="2">&nbsp;</td></tr> <!-- Fila en blanco -->
                        <tr class="totales">
                            <td class="fw-bold">Total de Pasivos</td>
                            <td>$6,000</td>
                        </tr>
                        <tr><td colspan="2">&nbsp;</td></tr> <!-- Fila en blanco -->
                        <tr>
                            <td>Capital Social</td>
                            <td>$8,000</td>
                        </tr>
                        <tr>
                            <td>Reservas</td>
                            <td>$2,000</td>
                        </tr>
                        <tr><td colspan="2">&nbsp;</td></tr> <!-- Fila en blanco -->
                        <tr class="totales">
                            <td>Total Capital</td>
                            <td>$10,000</td>
                        </tr>
                        <tr><td colspan="2">&nbsp;</td></tr> <!-- Fila en blanco -->
                        <tr class="totales">
                            <td class="fw-bold">Total Pasivo + Capital</td>
                            <td>$16,000</td>
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
