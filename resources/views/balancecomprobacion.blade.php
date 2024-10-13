<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balance de Comprobación - Tienda Romero</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/balancecomprobacion.css') }}">

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
        <h2>Balance de Comprobación</h2>
        <div class="balance-container">
            <div class="balance-section">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th></th>
                            <th colspan="3" class="adjusted">Ajustada</th>
                        </tr>
                        <tr>
                            <th>Título de Cuenta</th>
                            <th>Debe</th>
                            <th>Haber</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Efectivo</td>
                            <td></td>
                            <td>$10,000</td>
                        </tr>
                        <tr>
                            <td>Cuenta por cobrar</td>
                            <td></td>
                            <td>$5,000</td>
                        </tr>
                        <tr>
                            <td>Suministros</td>
                            <td></td>
                            <td>$1,500</td>
                        </tr>
                        <tr>
                            <td>Renta pagada por adelantada</td>
                            <td></td>
                            <td>$2,000</td>
                        </tr>
                        <tr>
                            <td>Terreno</td>
                            <td></td>
                            <td>$30,000</td>
                        </tr>
                        <tr>
                            <td>Edificio</td>
                            <td></td>
                            <td>$50,000</td>
                        </tr>
                        <tr>
                            <td>Depreciación acumulada: Edificio</td>
                            <td></td>
                            <td>($5,000)</td>
                        </tr>
                        <tr>
                            <td>Cuentas por pagar</td>
                            <td></td>
                            <td>($12,000)</td>
                        </tr>
                        <tr>
                            <td>Salarios por pagar</td>
                            <td></td>
                            <td>($2,000)</td>
                        </tr>
                        <tr>
                            <td>Ingresos por servicios no devengados</td>
                            <td></td>
                            <td>($3,500)</td>
                        </tr>
                        <tr>
                            <td>Romero, Capital</td>
                            <td></td>
                            <td>($50,000)</td>
                        </tr>
                        <tr>
                            <td>Romero, Retiros</td>
                            <td>$5,000</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Ingresos por servicios</td>
                            <td></td>
                            <td>($15,000)</td>
                        </tr>
                        <tr>
                            <td>Gastos por salarios</td>
                            <td>$8,000</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Gastos por renta</td>
                            <td>$4,000</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Gastos por suministros</td>
                            <td>$1,000</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Gastos por depreciación edificio</td>
                            <td>$3,000</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Gastos diversos</td>
                            <td>$2,000</td>
                            <td></td>
                        </tr>
                        <tr class="total-row"> <!-- Agregada clase para el borde -->
                            <td>Total</td>
                            <td>$65,500</td>
                            <td>$65,500</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <footer>
        <p>© 2024 Tienda Romero. Todos los derechos reservados.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
