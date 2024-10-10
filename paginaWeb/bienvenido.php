<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="./css/bienvenido.css">
</head>

<body>
    <div class="container">
        <h1>Bienvenido, <?php session_start();
                        echo $_SESSION['nom'];
                        ?>!</h1>
        <p>¡Has iniciado sesión exitosamente!</p>
    </div>
</body>

</html>