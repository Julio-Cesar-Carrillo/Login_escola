<?php
session_start(); 

if (!isset($_SESSION['nom'])) {
    // Si no hay una sesión activa, redirigir al login
    header('Location: ./login.php');
    exit();
}
?>
<!DOCTYPE html> 
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <div class="container">
        <h1>Bienvenido, <?php echo $_SESSION['nom']; ?>!</h1>
        <p>¡Has iniciado sesión exitosamente!</p>
    </div>
</body>  

</html>
