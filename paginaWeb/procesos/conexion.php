<?php
// Conexión a la base de datos
try {
    $conexion = new PDO('mysql:host=localhost; dbname=db_escuela', 'root', '');
} catch (PDOException $e) {
    echo "Error de conexión -> $e";
}
