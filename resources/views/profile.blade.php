<!DOCTYPE html>
<html>
<head>
    <title>Perfil de Usuario</title>
</head>
<body>

    <h1>Usuario autenticado</h1>

    <p><strong>ID:</strong> {{ $user->id }}</p>
    <p><strong>Nombre:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>

    @if($user->avatar)
        <img src="{{ $user->avatar }}" width="100">
    @endif

</body>
</html>