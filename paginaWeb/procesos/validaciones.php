<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $usuario = htmlspecialchars($_POST['user']);
    $contrasena = htmlspecialchars($_POST['pwd']);

    if (empty($usuario)) {
        header('Location: ../login.php?usuariovacio=El usuario no puede estar vacio');
        exit();
    }

    if (empty($contrasena)) {
        header('Location: ../login.php?pwdvacio=El campo contraseña es obligatorio');
        exit();
    }

    if (!preg_match("/^[a-zA-Z0-9]*$/", $usuario)) {
        header('Location: ../login.php?usermal=El usuario solo puede contener letras y números');
        exit();
    }
    include('conexion.php');
    $consulta = $pdo->prepare("SELECT * FROM tbl_usuarios WHERE nom_user = :user");
    $consulta->bindParam(":user", $usuario);
    $consulta->execute();
    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);



    if ($resultado &&  password_verify($contrasena, $resultado['pwd_user'])) {
        session_start();
        $_SESSION['nom'] = $resultado['nom_user'];
        header("location: ../bienvenido.php");
    } else {
        header("location: ../login.php?nom=" . $usuario . "&pwd=" . $contrasena);
        exit();
    }
    exit();
} else {
    header('Location: ../login.php');
    exit();
}
