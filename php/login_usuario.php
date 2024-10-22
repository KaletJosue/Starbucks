<?php

    session_start();

    include 'conexion_bd.php';

    $correo = $_POST['txtCorreo'];
    $contraseña = $_POST['txtClave'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM datos WHERE correo = '$correo' and contraseña = '$contraseña'");

    if (mysqli_num_rows($validar_login) > 0) {
        $_SESSION['usuario'] = $correo;
        header("location: /Starbucks/views/inside.php");
        exit();
    } else {
        echo "
            <script>
                alert('Ooops no puedes ingresar, intenta registrandote')
                window.location = '/Starbucks/views/login.php'
            </script>
        ";
        exit();
    }
?>