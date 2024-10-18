<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="/Starbucks/assets/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/Starbucks/style/login.css">
    <title>Login | StarBucks</title>
    <!-- Iconos -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://kit.fontawesome.com/460146b1b8.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $server = "localhost";
        $usuario = "root";
        $contraseña = "";
        $db = "ejemplo";

        $conexion = mysqli_connect($server, $usuario, $contraseña, $db) or die("Error en la conexión");

        $clave = $_POST['txtClave'];
        $nombre = $_POST['txtNombre'];
        $correo = $_POST['txtCorreo'];

        $verificarCorreo = "SELECT * FROM datos WHERE clave = '$clave'";
        $resultadoVerificacion = mysqli_query($conexion, $verificarCorreo);

        if (mysqli_num_rows($resultadoVerificacion) > 0) {
            echo "<script>
            Swal.fire({
                title: 'Error',
                text: 'Este correo electrónico ya está registrado',
                icon: 'error'
            });
            </script>";
        } else {
            $insertar = "INSERT INTO datos (clave, nombre, correo) VALUES ('$clave', '$nombre', '$correo')";

            if (mysqli_query($conexion, $insertar)) {
                echo "<script>
                Swal.fire({
                    title: 'Éxito',
                    text: 'Datos insertados correctamente',
                    icon: 'success'
                });
                </script>";
            } else {
                echo "<script>
                Swal.fire({
                    title: 'Error',
                    text: 'No se pudieron insertar los datos',
                    icon: 'error'
                });
                </script>";
            }
        }

        mysqli_close($conexion);
    }
    ?>

    <form action="" method="post">
        <img src="/Starbucks/assets/logo.png" alt="">
        <h1>STARBUCKS</h1>
        <p>Bienvenido de vuelta, inicia sesión con tus credenciales:</p>
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
        <input type="submit" value="Iniciar Sesión" name="btnRegistrar" class="btn">
    </form>

    <div class="text">
        <span></span>
        <img src="/Starbucks/assets/frap3.png" alt="">
        <h1>STARBUCKS</h1>
        <p>Ya sea que busques un espacio para relajarte o compartir con amigos, siempre encontrarás tu momento perfecto en Starbucks.</p>
    </div>

</body>

</html>
