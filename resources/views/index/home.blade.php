<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema Financiero</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" rel="stylesheet">

</head>

<body>
  <div class="container container-custom">
      <i class="bi bi-shop icon"></i>
      <h1>TIENDA ROMERO</h1>
      <p>Tu tienda en línea de confianza, ofreciendo lo mejor para ti.</p>
      <div>
          <a class="btn btn-primary btn-custom btn-primary-custom" href="{{ route('login') }}">
              <i class="bi bi-box-arrow-in-right"></i> INICIAR SESIÓN
          </a>
      </div>

      <div class="footer">
        <p>© 2024 Tienda Romero. Todos los derechos reservados.</p>
        <div class="footer-links">
          <a href="https://github.com/LuisCruz29/sistema" target="_blank" title="Repositorio en GitHub">
            <i class="fab fa-github"></i> GitHub
          </a>
          <a href="https://app.tango.us/app/workflow/Manual-de-Usuario-del-Sistema-Financiero-Tienda-Romero-0a783d25f5fa47c881f73b5c85321562" target="_blank" title="Manual de Usuario">
            <i class="fas fa-file-pdf"></i> Manual de Usuario
          </a>
          <a href="https://drive.google.com/file/d/1nFLkvRGx-oMIaWydYm5yi16EQlE-vto1/view?usp=sharing" target="_blank" title="Manual de Programador">
            <i class="fas fa-code"></i> Manual de Programador
          </a>
        </div>
      </div>

      <!-- Asegúrate de incluir Font Awesome en tu proyecto -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">



  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
