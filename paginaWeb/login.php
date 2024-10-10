<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="./css/styles.css">
    <script src="./js/validaciones.js"></script>
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="./img/logoJ23.png" alt="Logo">
        </div>
        <div class="login-form">
            <h2>Iniciar Sesión</h2>
            <form id="loginForm" action="./procesos/validaciones.php" method="POST">
                <div class="input-group">
                    <label for="user">Usuario:</label>
                    <input type="text" id="user" name="user" onblur="validarUser()">
                    <p id="error_user" class="error" style="color:red;">
                        <?php
                        if (isset($_GET['usuariovacio'])) {
                            echo $_GET['usuariovacio'];
                        }
                        if (isset($_GET['usermal'])) {
                            echo $_GET['usermal'];
                        }
                        ?>
                    </p><br><br>
                </div>
                <div class="input-group">
                    <label for="pwd">Contraseña:</label>
                    <input type="password" id="pwd" name="pwd" onblur="validarPwd()">
                    <p id="error_pwd" class="error" style="color:red;">
                        <?php
                        if (isset($_GET['pwdvacio'])) {
                            echo $_GET['pwdvacio'];
                        }
                        ?>
                    </p><br><br>
                </div>
                <button type="submit" onclick="validacampos()">Ingresar</button>
            </form>
        </div>
    </div>
</body>

</html>