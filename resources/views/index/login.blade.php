<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Tienda Romero</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    
    <style>
     
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to bottom, #1f1f2e, #1f1f2e);
            font-family: Arial, sans-serif;
        }

       
        .login-container {
            background-color: rgba(45, 45, 68, 0.9);
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .login-icon {
            font-size: 3rem;
            color: #4a90e2;
            margin-bottom: 1rem;
        }

       
        .noty_theme__sunset.noty_type__error {
            background-color: #d9534f; 
            color: #ffffff;
            border-radius: 8px;
            padding: 1rem;
            font-size: 16px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .noty_theme__sunset.noty_type__error .noty_body i {
            font-size: 1.5rem;
            color: #ffffff;
            margin-right: 0.5rem;
            vertical-align: middle;
        }

       
        .noty_bar {
            background-color: #f0ad4e; 
        }
    </style>
</head>

<body>

    <div class="login-container">
        <div class="text-center">
            <i class="bi bi-person-circle login-icon"></i>
        </div>
        <h2 class="text-center">Iniciar Sesión</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Usuario</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Ingrese su usuario" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-lock"></i></span>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese su contraseña" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
            <a href="/" class="btn btn-secondary w-100 mt-2">Cancelar</a>
        </form>
    </div>

   
    <link href="https://cdn.jsdelivr.net/npm/noty/lib/noty.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/noty/lib/themes/sunset.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/noty/lib/noty.min.js"></script>

  
    <script>
        @if (session('error'))
            new Noty({
                text: '<i class="bi bi-exclamation-triangle-fill"></i> {{ session('error') }}',
                type: 'error',
                layout: 'topRight',
                theme: 'sunset',
                timeout: 3000, 
                progressBar: true,
            }).show();
        @endif
    </script>
</body>

</html>
