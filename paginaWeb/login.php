<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="./img/logoJ23.png" alt="Logo">
        </div>
        <div class="login-form">
            <h2>Iniciar Sesión</h2>
            <form action="./procesos/validaciones.php" method="POST">
                <div class="input-group">
                    <label for="user">Usuario:</label>
                    <input type="text" id="user" name="user">
                </div>
                <div class="input-group">
                    <label for="pwd">Contraseña:</label>
                    <input type="password" id="pwd" name="pwd">
                </div>
                <button type="submit">Ingresar</button>
            </form>
        </div>
    </div>
</body>
</html>
