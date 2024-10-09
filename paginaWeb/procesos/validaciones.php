<?php
include('./conexion.php');

$user = $_POST['user'];
$pwd = $_POST['pwd'];

$consulta = $pdo->prepare("SELECT * FROM tbl_usuarios WHERE nom_user = :user");
$consulta->bindParam(":user", $user);
$consulta->execute();
$resultado = $consulta->fetch(PDO::FETCH_ASSOC);

session_start();

if ($resultado && password_verify($pwd, $resultado['pwd_user'])) {
    $session['nom'] = $resultado['nom_user'];
} else {
    header("location: ../login.php?nom=" . $user . "&pwd=" . $pwd);
    exit();
}
