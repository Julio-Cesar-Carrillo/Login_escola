<?php
$host = "localhost"; 
$usuario = "root";
$contraseña = "";
$base_de_datos = "db_escuela"; 

$conexion = new mysqli($host, $usuario, $contraseña, $base_de_datos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
} else {
    echo "Conexión exitosa a la base de datos";
}

?>
