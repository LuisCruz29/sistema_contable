<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estado de Capital - Tienda Romero</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/estadocapital.css') }}">

    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #5c6bc0; /* Color de la barra de navegación */
        }

        .navbar-brand,
        .nav-link {
            color: white !important;
        }

        .nav-link {
            margin-right: 20px; /* Añadir espacio entre los elementos */
        }

        h2 {
            font-size: 2.5rem; /* Tamaño de letra */
            margin-top: 30px;
            margin-bottom: 20px;
            color: #333;
            font-weight: bold; /* Negrita */
            text-align: center; /* Centrando el texto */
        }

        .balance-container {
            display: flex;
            justify-content: center; /* Centra horizontalmente las tarjetas */
            margin: 30px 0;
        }

        .balance-section {
            width: 100%; /* La tarjeta ocupará todo el ancho */
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            text-align: center;
        }

        th,
        td {
            padding: 8px;
            text-align: center; /* Centrando el contenido de las celdas */
        }

        th {
            background-color: #5c6bc0;
            color: black; /* Cambiar color del texto de encabezado a negro */
        }

        .totales td:last-child {
            border-bottom: 2px solid black; /* Línea negra solo debajo del monto total */
        }

        footer {
            background-color: #5c6bc0; /* Color del pie de página */
            color: white;
            padding: 20px 0;
            margin-top: 40px;
            text-align: center;
        }

        .totales {
            font-weight: bold; /* Negrita para totales */
        }

        /* Estilo para la fila de capital total */
        .capital-total {
            border: 3px solid black; /* Aumentar el grosor del borde */
            font-weight: bold; /* Negrita */
        }

        .capital-total td {
            border-top: 3px solid black; /* Borde superior */
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
                        <a class="nav-link" onclick="window.location.href='/'">Cerrar sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <h2>Estado de Capital</h2>
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
                        <!-- Capital Inicial -->
                        <tr>
                            <td>Romero, Capital</td>
                            <td>$50,000</td>
                        </tr>
                        <tr>
                            <td colspan="2">&nbsp;</td>
                        </tr> <!-- Fila en blanco -->

                        <tr>
                            <td class="fw-bold">Mas</td>
                            <td></td>
                        </tr>
                        <!-- Retiros -->
                        <tr>
                            <td>Utilidad neta</td>
                            <td>($10,500)</td>
                        </tr>
                        <tr>
                            <td colspan="2">&nbsp;</td>
                        </tr> <!-- Fila en blanco -->

                        <tr>
                            <td class="fw-bold">Menos</td>
                            <td></td>
                        </tr>
                        <!-- Retiros -->
                        <tr>
                            <td>Romero, Retiros</td>
                            <td>($5,000)</td>
                        </tr>
                        <tr>
                            <td colspan="2">&nbsp;</td>
                        </tr> <!-- Fila en blanco -->

                        <!-- Capital Total -->
                        <tr class="capital-total"> <!-- Aplicando estilo de borde -->
                            <td>Capital Total</td>
                            <td>$55,500</td>
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
