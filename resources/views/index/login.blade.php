<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Tienda Romero</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

</head>

<body>

    <div class="login-container">
        <h2 class="text-center">Iniciar Sesión</h2>
        <form>
            <div class="mb-3">
                <label for="username" class="form-label">Usuario</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                    <input type="text" class="form-control" id="username" placeholder="Ingrese su usuario">
                </div>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-lock"></i></span>
                    <input type="password" class="form-control" id="password" placeholder="Ingrese su contraseña">
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <button type="button" class="btn btn-primary btn-custom btn-primary-custom" onclick="window.location.href='/principal'">
                    <i class="bi bi-box-arrow-in-right"></i> Iniciar Sesión
                </button>
                <button type="button" class="btn btn-secondary btn-custom btn-secondary-custom" onclick="window.location.href='/'">
                    <i class="bi bi-x-circle"></i> Cancelar
                </button>
            </div>

            <div class="forgot-password">
                <a href="#" onclick="alert('Funcionalidad de recuperación de contraseña aún no implementada.');">¿Olvidó su contraseña?</a>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
