<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Perfil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Perfil de Usuario</h2>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Cerrar Sesión</button>
            </form>
        </div>
        <div class="card p-4 shadow-sm" style="max-width: 500px;">
            <p><strong>Nombre Completo:</strong> {{ $user->name }}</p>
            <p><strong>Nombre de Usuario:</strong> {{ $user->username }}</p>
            <p><strong>Correo Electrónico:</strong> {{ $user->email }}</p>
            <p><strong>Rol asignado:</strong> <span class="badge bg-secondary">{{ strtoupper($user->role) }}</span></p>
        </div>
    </div>
</body>
</html>