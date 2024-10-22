<?php

    session_start();

    if (!isset($_SESSION["usuario"])) {
        echo"
            <script>
                alert('Debes iniciar sesion de manera correcta')
                window.location = '/Starbucks/index.html'
            </script>
        ";
        session_destroy();
        die();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starbucks</title>
</head>
<body>
    <h1>Que pasaaaa perroooooos</h1>
    <a href="/Starbucks/php/cerrar_sesion.php">Cerrar Sesion</a>
</body>
</html>