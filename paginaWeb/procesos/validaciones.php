<?php
include('./conexion.php');

$user = $_POST['user'];
$pwd = $_POST['pwd'];

$consulta = $pdo->prepare("SELECT * FROM tbl_usarios WHERE nom_user = :user");
$consulta->bindParam(":user", $user);
$consulta->execute();
$resultado = $consulta->fetch(PDO::FETCH_ASSOC);

$pwdencrip = password_hash($pwd, PASSWORD_BCRYPT);
// echo $pwdencrip . " pwdencrip";
if ($resultado && password_verify($pwd, $resultado['pwd_user'])) {
    echo "hola esta bien" . $resultado['nom_user'];
} else {
    echo "hola esta mal " . $resultado['nom_user'];
    exit();
}
