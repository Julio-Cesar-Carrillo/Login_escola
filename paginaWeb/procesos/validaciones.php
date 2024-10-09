<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $usuario = trim($_POST['user']);
    $contrasena = trim($_POST['pwd']);

    if (empty($usuario)) {
        header('Location: ../login.php?error=El campo usuario es obligatorio');
        exit();
    }
    
    if (empty($contrasena)) {
        header('Location: ../login.php?error=El campo contraseña es obligatorio');
        exit();
    }

    if (!preg_match("/^[a-zA-Z0-9]*$/", $usuario)) {
        header('Location: ../login.php?error=El usuario solo puede contener letras y números');
        exit();
    }

    if ($usuario === $usuario_valido && $contrasena === $contrasena_valida) {
        header('Location: ../conexion.php'); // Redirigir a un dashboard o página principal
        exit();
    } else {
        // Credenciales incorrectas
        header('Location: ../conexion.php?error=Usuario o contraseña incorrectos');
        exit();
    }
} else {
    header('Location: ../login.php');
    exit();
}
