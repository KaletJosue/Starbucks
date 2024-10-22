<?php

include 'conexion_bd.php';

$nombre = $_POST['txtNombre'];
$correo = $_POST['txtCorreo'];
$contraseña = $_POST['txtClave'];

$query = "INSERT INTO datos(nombre, contraseña, correo) VALUES ('$nombre', '$contraseña', '$correo')";


$verificar_correo = mysqli_query($conexion, "SELECT * FROM datos WHERE correo='$correo'");

if (mysqli_num_rows($verificar_correo) > 0) {
    echo "
        <script>
            alert('Parece que este correo ya esta registrado intenta de nuevo')
            window.location = '/Starbucks/views/login.php'
        </script>
    ";
    exit();
}

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM datos WHERE nombre='$nombre'");

if (mysqli_num_rows($verificar_usuario) > 0) {
    echo "
        <script>
            alert('Parece que este nombre de ususario ya esta registrado intenta de nuevo')
            window.location = '/Starbucks/views/login.php'
        </script>
    ";
    exit();
}

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo "
            <script>
                alert('Registrado Exitosamente')
                window.location = '/Starbucks/views/login.php'
            </script>
        ";
} else {
    echo "
        <script>
            alert('Hubo un error, intenta nuevamente')
            window.location = '/Starbucks/views/login.php'
        </script>
    ";
}

mysqli_close($conexion)

    ?>