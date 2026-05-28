<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light d-flex align-items-center" style="height: 100vh;">
    <div class="container text-center" style="max-width: 400px;">
        <div class="card shadow-sm p-4">
            <h5 class="text-muted mb-3">Estudiante: Cristhian Nelson Huanca Flores</h5> 
            <hr>
            <h3 class="mb-3">Ingreso al Sistema</h3>
            
            @if ($errors->any())
                <div class="alert alert-danger">{{ $errors->first() }}</div>
            @endif

            <form action="{{ url('/login') }}" method="POST">
                @csrf
                <div class="mb-3 text-start">
                    <label class="form-label">Usuario</label>
                    <input type="text" name="username" class="form-control" required placeholder="Ej: omarqm">
                </div>
                <div class="mb-3 text-start">
                    <label class="form-label">Contraseña</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Ingresar</button>
            </form>
        </div>
    </div>
</body>
</html>