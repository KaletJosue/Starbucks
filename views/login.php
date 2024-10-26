<?php
$mensaje = '';

if (isset($_POST['btnRegistrar'])) {
    include '../php/conexion_bd.php';

    $nombre = $_POST['txtNombreRegis'];
    $correo = $_POST['txtCorreoRegis'];
    $clave = $_POST['txtClaveRegis'];
    $confirmarClave = $_POST['txtClaveConfirmRegis'];

    if ($clave == $confirmarClave) {
        $verificarCorreo = mysqli_query($conexion, "SELECT * FROM datos WHERE correo='$correo'");

        if (mysqli_num_rows($verificarCorreo) > 0) {
            $mensaje = 'correo_existe';
        } else {
            $query = "INSERT INTO datos (nombre, correo, contraseña) VALUES ('$nombre', '$correo', '$clave')";
            $ejecutar = mysqli_query($conexion, $query);
            $mensaje = $ejecutar ? 'registro_exitoso' : 'error_registro';
        }
    } else {
        $mensaje = 'clave_incorrecta';
    }

    mysqli_close($conexion);

} else if (isset($_POST['btnIniciar'])) {
    session_start();

    include '../php/conexion_bd.php';

    $correo = $_POST['txtCorreo'];
    $clave = $_POST['txtClave'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM datos WHERE correo = '$correo' and contraseña = '$clave'");

    if (mysqli_num_rows($validar_login) > 0) {
        $_SESSION['usuario'] = $correo;
        header("Location: ../views/inside.php");
        exit();
    } else {
        $mensaje = "usuario incorrecto";
    }
}
?>

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
        <form action="" method="post" class="login">
            <img src="/Starbucks/assets/logo.png" alt="">
            <h1>STARBUCKS</h1>
            <p>Bienvenido de vuelta, inicia sesión con tus credenciales:</p>
            <div class="input">
                <i class="fa-solid fa-user fa-bounce"></i>
                <input type="text" placeholder="Correo Electrónico" id="txtCorreo" name="txtCorreo" required
                    autocomplete="off">
            </div>
            <div class="input">
                <i class="fa-solid fa-lock fa-shake"></i>
                <input type="password" placeholder="Contraseña" id="txtClave" name="txtClave" required
                    autocomplete="off">
                <i class="fa-solid fa-eye" id="contraLog"></i>
            </div>
            <a class="btnCuenta">¿No tienes cuenta? Regístrate</a>
            <input type="submit" value="Iniciar Sesión" name="btnIniciar" class="btn">
        </form>

        <form action="" method="post" class="register">
            <img src="/Starbucks/assets/logo.png" alt="">
            <h1>STARBUCKS</h1>
            <p>Crea una cuenta nueva con tus credenciales:</p>
            <div class="input">
                <i class="fa-solid fa-user fa-bounce"></i>
                <input type="text" placeholder="Nombre" id="txtNombreRegis" name="txtNombreRegis" required
                    autocomplete="off">
            </div>
            <div class="input">
                <i class="fa-solid fa-user fa-bounce"></i>
                <input type="text" placeholder="Correo Electrónico" id="txtCorreoRegis" name="txtCorreoRegis" required
                    autocomplete="off">
            </div>
            <div class="input">
                <i class="fa-solid fa-lock fa-shake"></i>
                <input type="password" placeholder="Contraseña" id="txtClaveRegis" name="txtClaveRegis" required
                    autocomplete="off">
                <i class="fa-solid fa-eye" id="contraRegis"></i>
            </div>
            <div class="input">
                <i class="fa-solid fa-lock fa-shake"></i>
                <input type="password" placeholder="Confirmar Contraseña" id="txtClaveConfirmRegis"
                    name="txtClaveConfirmRegis" required autocomplete="off">
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

    <div class="modal">
        <div class="modal-content">
            <span class="closeIcon"><i class="fas fa-times"></i></span>
            <div class="modal-body">
                <span class="icon"><i class="fas fa-exclamation-triangle"></i></span>
                <div class="right-items">
                    <h1>¡Perfecto!</h1>
                    <p>Ya puedes iniciar sesion con tus credenciales</p>
                    <button id="okBtn">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal2">
        <div class="modal-content2">
            <span class="closeIcon2"><i class="fas fa-times"></i></span>
            <div class="modal-body2">
                <span class="icon2"><i class="fas fa-exclamation-triangle"></i></span>
                <div class="right-items2">
                    <h1>¡Ooops!</h1>
                    <p>Las contraseñas no son iguales</p>
                    <button id="okBtn2">Inténtalo otra vez</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal3">
        <div class="modal-content3">
            <span class="closeIcon3"><i class="fas fa-times"></i></span>
            <div class="modal-body3">
                <span class="icon3"><i class="fas fa-exclamation-triangle"></i></span>
                <div class="right-items3">
                    <h1>¡Ooops!</h1>
                    <p class="text3">No pudimos ingresar tus credenciales, intenta de nuevo</p>
                    <button id="okBtn3">Inténtalo otra vez</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let mensaje = "<?php echo $mensaje; ?>";

            if (mensaje === 'correo_existe') {
                modal3.classList.add('active');
                text3.textContent = 'Este correo ya está registrado en nuestra base de datos';
            } else if (mensaje === 'registro_exitoso') {
                modal.classList.add('active');
            } else if (mensaje === 'error_registro') {
                modal3.classList.add('active');
                text3.textContent = 'No pudimos ingresar tus credenciales, intenta de nuevo';
            } else if (mensaje === 'clave_incorrecta') {
                modal2.classList.add('active');
            } else if (mensaje === 'usuario incorrecto') {
                modal3.classList.add('active');
                text3.textContent = 'Correo o contraseña incorrectos';
            }

            if (mensaje) {
                setTimeout(function () {
                    window.location.href = "../views/login.php";
                }, 3000);
            }
        });
    </script>

    <script src="/Starbucks/controller/login.js"></script>
</body>

</html>