<?php

$mensaje = '';

session_start();

if (!isset($_SESSION["usuario"])) {
    echo "
        <head>
            <meta charset='UTF-8' />
            <meta name='viewport' content='width=device-width, initial-scale=1.0' />
            <link rel='shortcut icon' href='../assets/logo.png' type='image/x-icon'>
            <link rel='stylesheet' href='../style/inside.css'>
            <title class='title'>Starbucks</title>
            <!-- Iconos -->
            <link href='https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css' rel='stylesheet'>
            <script src='https://unpkg.com/boxicons@2.1.4/dist/boxicons.js'></script>
            <script src='https://kit.fontawesome.com/460146b1b8.js' crossorigin='anonymous'></script>
        </head>

        <div class='modal'>
            <div class='modal-content'>
                <div class='modal-body'>
                    <span class='icon'><i class='fas fa-exclamation-triangle'></i></span>
                    <div class='right-items'>
                        <h1>¡Ooops!</h1>
                        <p>Inicia sesion de manera adecuada</p>
                        <button id='okBtn'>Iniciar sesion</button>
                    </div>
                </div>
            </div>
        </div>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

            * {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
                text-decoration: none;
                list-style: none;
                font-family: 'Montserrat';
            }

            /* modal */

            .modal {
                top: 0;
                left: 0;
                display: flex;
                position: fixed;
                width: 100vw;
                height: 100vh;
                background-color: #545454;
                align-items: center;
                justify-content: center;
                transition: all .2s ease;
                padding: 1rem 2rem;
                z-index: 10;
            }

            .modal-content {
                background: #17181c;
                color: #f1f2f4;
                width: 500px;
                height: 250px;
                overflow: hidden;
                position: relative;
                box-shadow: 0 0.75rem 1rem #0b0c0e4d;
                border-radius: 1em;
                z-index: 1;
                padding: 0 3rem;
            }

            .modal-content::before {
                background-color: #e06363da;
                border-radius: 50%;
                content: '';
                filter: blur(60px);
                opacity: .15;
                position: absolute;
                right: -15em;
                width: 25em;
                height: 25em;
                z-index: 0;
                transition: background-color .3s ease;
            }

            .closeIcon {
                position: absolute;
                right: 20px;
                top: 20px;
                color: #abafba;
                font-size: 20px;
                cursor: pointer;
            }

            .closeIcon:hover {
                color: #c7cad1;
            }

            .modal-body {
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100%;
                padding: 20px;
                gap: 1rem;
            }

            span.icon {
                font-size: 50px;
                color: #bc4343;
            }

            .right-items h1 {
                font-size: 40px;
                font-weight: 900;
            }

            .right-items p {
                font-size: 15px;
                font-weight: 500;
            }

            button#okBtn {
                padding: 8px 2rem;
                font-size: 13px;
                font-weight: 500;
                background-color: transparent;
                color: white;
                border: 1px solid #bc4343;
                cursor: pointer;
                position: absolute;
                right: 20px;
                bottom: 20px;
                border-radius: 10px;
                transition: all .2s ease;
            }

            button#okBtn:hover {
                background-color: #bc4343;
            }

            @media (width < 500px) {
                .modal-body {
                    display: flex;
                    flex-direction: column;
                    text-align: center;
                }

                .modal-content {
                    height: 350px;
                    padding: 0;
                }

                button#okBtn {
                    width: 80%;
                    bottom: 40px;
                    right: 50%;
                    transform: translateX(50%)
                }
            }
        </style>

        <script>
            var okBtn = document.querySelector('#okBtn')

            okBtn.addEventListener('click', () => {
                location.href = '../views/login.php'
            })
        </script>
    ";
    session_destroy();
    die();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../assets/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../style/inside.css">
    <title class="title">Starbucks</title>
    <!-- Iconos -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://kit.fontawesome.com/460146b1b8.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="sidebar">

        <i class="ri-menu-line" id="btnsidebar"></i>
        <i class="ri-close-line" id="btnsidebar2"></i>

        <div class="head">
            <div class="user-img">
                <img src="../assets/logo.png" alt="" class="menu-btn">
            </div>
            <div class="user-details">
                <p class="title">STARBUCKS</p>
                <p class="name">Cafe Helado</p>
            </div>
        </div>

        <div class="nav">
            <div class="menu">
                <p class="title"></p>
                <ul>
                    <li class="active">
                        <a href="/views/admin/inside/inside.html">
                            <i class="fa-solid fa-house"></i>
                            <span class="text">Incio</span>
                        </a>
                    </li>
                    <li>
                        <a href="/views/admin/register_user/register_user.html" target="_blank">
                            <i class="fa-solid fa-heart"></i>
                            <span class="text">Favoritos</span>
                        </a>
                    </li>
                    <li>
                        <a href="/views/admin/tabla/tabla.html">
                            <i class="fa-solid fa-table-cells-large"></i>
                            <span class="text">Secciones</span>
                        </a>
                    </li>
                    <li>
                        <a href="/views/admin/gestion/gestion.html">
                            <i class="fa-solid fa-mug-saucer"></i>
                            <span class="text">Bebidas</span>
                        </a>
                    </li>
                    <li>
                        <a href="/views/admin/central/central.html">
                        <i class="fa-solid fa-wheat-awn"></i>
                            <span class="text">Alimentos</span>
                        </a>
                    </li>
                    <li>
                        <a href="/views/admin/historico/historico.html">
                        <i class="fa-solid fa-cart-shopping"></i>
                            <span class="text">Carrito</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="menu">
            <p class="title">Cuenta</p>
            <ul>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-moon" id="moon"></i>
                        <span class="text">Dark Mode</span>
                        <label class="theme-switch">
                            <input type="checkbox" class="theme-switch__checkbox">
                            <div class="theme-switch__container">
                                <div class="theme-switch__clouds"></div>
                                <div class="theme-switch__stars-container">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144 55" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M135.831 3.00688C135.055 3.85027 134.111 4.29946 133 4.35447C134.111 4.40947 135.055 4.85867 135.831 5.71123C136.607 6.55462 136.996 7.56303 136.996 8.72727C136.996 7.95722 137.172 7.25134 137.525 6.59129C137.886 5.93124 138.372 5.39954 138.98 5.00535C139.598 4.60199 140.268 4.39114 141 4.35447C139.88 4.2903 138.936 3.85027 138.16 3.00688C137.384 2.16348 136.996 1.16425 136.996 0C136.996 1.16425 136.607 2.16348 135.831 3.00688ZM31 23.3545C32.1114 23.2995 33.0551 22.8503 33.8313 22.0069C34.6075 21.1635 34.9956 20.1642 34.9956 19C34.9956 20.1642 35.3837 21.1635 36.1599 22.0069C36.9361 22.8503 37.8798 23.2903 39 23.3545C38.2679 23.3911 37.5976 23.602 36.9802 24.0053C36.3716 24.3995 35.8864 24.9312 35.5248 25.5913C35.172 26.2513 34.9956 26.9572 34.9956 27.7273C34.9956 26.563 34.6075 25.5546 33.8313 24.7112C33.0551 23.8587 32.1114 23.4095 31 23.3545ZM0 36.3545C1.11136 36.2995 2.05513 35.8503 2.83131 35.0069C3.6075 34.1635 3.99559 33.1642 3.99559 32C3.99559 33.1642 4.38368 34.1635 5.15987 35.0069C5.93605 35.8503 6.87982 36.2903 8 36.3545C7.26792 36.3911 6.59757 36.602 5.98015 37.0053C5.37155 37.3995 4.88644 37.9312 4.52481 38.5913C4.172 39.2513 3.99559 39.9572 3.99559 40.7273C3.99559 39.563 3.6075 38.5546 2.83131 37.7112C2.05513 36.8587 1.11136 36.4095 0 36.3545ZM56.8313 24.0069C56.0551 24.8503 55.1114 25.2995 54 25.3545C55.1114 25.4095 56.0551 25.8587 56.8313 26.7112C57.6075 27.5546 57.9956 28.563 57.9956 29.7273C57.9956 28.9572 58.172 28.2513 58.5248 27.5913C58.8864 26.9312 59.3716 26.3995 59.9802 26.0053C60.5976 25.602 61.2679 25.3911 62 25.3545C60.8798 25.2903 59.9361 24.8503 59.1599 24.0069C58.3837 23.1635 57.9956 22.1642 57.9956 21C57.9956 22.1642 57.6075 23.1635 56.8313 24.0069ZM81 25.3545C82.1114 25.2995 83.0551 24.8503 83.8313 24.0069C84.6075 23.1635 84.9956 22.1642 84.9956 21C84.9956 22.1642 85.3837 23.1635 86.1599 24.0069C86.9361 24.8503 87.8798 25.2903 89 25.3545C88.2679 25.3911 87.5976 25.602 86.9802 26.0053C86.3716 26.3995 85.8864 26.9312 85.5248 27.5913C85.172 28.2513 84.9956 28.9572 84.9956 29.7273C84.9956 28.563 84.6075 27.5546 83.8313 26.7112C83.0551 25.8587 82.1114 25.4095 81 25.3545ZM136 36.3545C137.111 36.2995 138.055 35.8503 138.831 35.0069C139.607 34.1635 139.996 33.1642 139.996 32C139.996 33.1642 140.384 34.1635 141.16 35.0069C141.936 35.8503 142.88 36.2903 144 36.3545C143.268 36.3911 142.598 36.602 141.98 37.0053C141.372 37.3995 140.886 37.9312 140.525 38.5913C140.172 39.2513 139.996 39.9572 139.996 40.7273C139.996 39.563 139.607 38.5546 138.831 37.7112C138.055 36.8587 137.111 36.4095 136 36.3545ZM101.831 49.0069C101.055 49.8503 100.111 50.2995 99 50.3545C100.111 50.4095 101.055 50.8587 101.831 51.7112C102.607 52.5546 102.996 53.563 102.996 54.7273C102.996 53.9572 103.172 53.2513 103.525 52.5913C103.886 51.9312 104.372 51.3995 104.98 51.0053C105.598 50.602 106.268 50.3911 107 50.3545C105.88 50.2903 104.936 49.8503 104.16 49.0069C103.384 48.1635 102.996 47.1642 102.996 46C102.996 47.1642 102.607 48.1635 101.831 49.0069Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </div>
                                <div class="theme-switch__circle-container">
                                    <div class="theme-switch__sun-moon-container">
                                        <div class="theme-switch__moon">
                                            <div class="theme-switch__spot"></div>
                                            <div class="theme-switch__spot"></div>
                                            <div class="theme-switch__spot"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </label>
                    </a>
                </li>
                <li class="btnacount">
                    <a href="#">
                        <i class="fa-solid fa-user"></i>
                        <span class="text">Cuenta</span>
                    </a>
                </li>
                <li id="logout">
                    <a href="#">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span class="text">Salir</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <main>
        <header>
            <div class="input">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Busca tu producto por nombre, precio, cantidad...">
            </div>
            <div class="right">
                <div class="text_right">
                    <h1><span>Hola, </span>Kalet Josue</h1>
                    <p>Bienvenido de vuelta</p>
                </div>
                <img src="../assets/profile.jpg" alt="">
            </div>
        </header>
    </main>

    <div class='modal2'>
        <div class='modal-content2'>
            <span class="closeIcon2"><i class="fas fa-times"></i></span>
            <div class='modal-body2'>
                <span class='icon2'><i class='fas fa-exclamation-triangle'></i></span>
                <div class='right-items2'>
                    <h1>¡Atencion!</h1>
                    <p>Estas apunto de salir</p>
                    <a href="../php/cerrar_sesion.php" id='okBtn2'>Si, hazlo</a>
                    <button id='cancelBtn2'>No, volver</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../controller/inside.js"></script>
</body>

</html>