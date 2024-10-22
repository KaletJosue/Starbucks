<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="/Starbucks/assets/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/Starbucks/style/login.css">
    <title class="title">Iniciar Sesión | Starbucks</title>
    <!-- Iconos -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://kit.fontawesome.com/460146b1b8.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="container">
        <form action="/Starbucks/php/login_usuario.php" method="post" class="login">
            <img src="/Starbucks/assets/logo.png" alt="">
            <h1>STARBUCKS</h1>
            <p>Bienvenido de vuelta, inicia sesión con tus credenciales:</p>
            <div class="input">
                <i class="fa-solid fa-user fa-bounce"></i>
                <input type="text" placeholder="Correo Electrónico" id="txtCorreo" name="txtCorreo" required>
            </div>
            <div class="input">
                <i class="fa-solid fa-lock fa-shake"></i>
                <input type="password" placeholder="Contraseña" id="txtClave" name="txtClave" required>
            </div>
            <a class="btnCuenta">¿No tienes cuenta? Regístrate</a>
            <input type="submit" value="Iniciar Sesión" name="btnIniciar" class="btn">
        </form>

        <form action="/Starbucks/php/registro_usuario.php" method="post" class="register">
            <img src="/Starbucks/assets/logo.png" alt="">
            <h1>STARBUCKS</h1>
            <p>Crea una cuenta nueva con tus credenciales:</p>
            <div class="input">
                <i class="fa-solid fa-user fa-bounce"></i>
                <input type="text" placeholder="Nombre" id="txtNombre" name="txtNombre" required>
            </div>
            <div class="input">
                <i class="fa-solid fa-user fa-bounce"></i>
                <input type="text" placeholder="Correo Electrónico" id="txtCorreo" name="txtCorreo" required>
            </div>
            <div class="input">
                <i class="fa-solid fa-lock fa-shake"></i>
                <input type="password" placeholder="Contraseña" id="txtClave" name="txtClave" required>
            </div>
            <div class="input">
                <i class="fa-solid fa-lock fa-shake"></i>
                <input type="password" placeholder="Confirmar Contraseña" id="txtClaveConfirm" name="txtClaveConfirm"
                    required>
            </div>
            <a class="btnCuenta2">¿Ya tienes cuenta? Inicia sesión</a>
            <input type="submit" value="Registrarse" name="btnRegistrar" class="btn">
        </form>

        <span1 class="span1"></span1>
        <span2 class="span2"></span2>

        <div class="text1">
            <h1>STARBUCKS</h1>
            <p>Disfruta de café artesanal, momentos acogedores y sabores únicos. ¡Haz de cada visita una experiencia
                especial en Starbucks!</p>
            <button class="btnRegisterCir">Registrarse</button>
        </div>

        <div class="text2">
            <h1>STARBUCKS</h1>
            <p>Disfruta de café artesanal, momentos acogedores y sabores únicos. ¡Haz de cada visita una experiencia
                especial en Starbucks!</p>
            <button class="btnIniciarCir">Iniciar Sesion</button>
        </div>

        <img src="/Starbucks/assets/coffe3.png" class="img1">
        <img src="/Starbucks/assets/coffe5.png" class="img2">
    </div>

    <script src="/Starbucks/controller/login.js"></script>
</body>

</html>