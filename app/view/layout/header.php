<!-- <?php require_once __DIR__ . '/../../../config/config.php';?> -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/login.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/navbar.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/mainInicio.css">
    <!-- <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/mainEventos.css"> -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/footer.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/480725016e.js" crossorigin="anonymous"></script>
    <style>
        nav div#der a#Inicio{
            background: green;
        }
    </style>
</head>
<body>
    <nav>
        <div id="izq">
            <a href="#" class="user izq" id="NavLogo">
                <img src="<?= BASE_URL ?>/assets/img/Logo.png" alt="">
            </a>
            <a href="#" class="user izq UC AD CL PRO" id="Usuario">
                <i class="fa-regular fa-user"></i>
                <p><span>Usuario</span></p>
            </a>
        </div>
        <label for="hamburguesa" class="hamburguesa"><i class="fa-solid fa-bars"></i></label>
        <input type="checkbox" class="hamburguesa" name="hamburguesa" id="hamburguesa">
        <div id="der">
            <a href="index.php?page=inicio" class="user der NU UC AD CL PRO" id="Inicio">
                <i class="fa-solid fa-house"></i>
                <p><span>Inicio</span></p>
            </a>
            <a href="#" class="user der UC AD" id="Proveedor">
                <i class="fa-solid fa-truck"></i>
                <p><span>Proveedor</span></p>
            </a>
            <a href="index.php?page=eventos" class="user der NU UC AD CL PRO" id="Eventos">
                <i class="fa-regular fa-flag"></i>
                <p><span>Eventos</span></p>
            </a>
            
            <a href="Carrito.html" class="user der UC AD CL PRO" id="Carrito">
                <i class="fa-solid fa-cart-shopping"></i>
                <p><span>Carrito</span></p>
            </a>
            <a href="#" class="user der UC AD" id="Clientes">
                <i class="fa-solid fa-person"></i>
                <p><span>Clientes</span></p>
            </a>
            <a href="#" class="user der UC AD CL PRO" id="Config">
                <i class="fa-solid fa-gear"></i>
                <p><span>Configuracion</span></p>
            </a>
            <a href="#" class="user der UC AD CL PRO" id="CerrSes">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                <p><span>Cerrar Sesion</span></p>
            </a>
        </div>
    </nav>
    <label for="IniciarSesion" class="user IniciarSesion NU UC"><i class="fa-solid fa-right-to-bracket"></i><span>Login</span></label>
    <input type="checkbox" class="IniciarSesion" name="IniciarSesion" id="IniciarSesion">
    <div id="fondo"></div>
    <form id="login">
        <h2>Login</h2>
        <div class="input" title="Ingrese su correo">Correo<input pattern="[A-Za-z1-9]+@+[A-Za-z]+\.+[a-z]{2,6}" type="email" name="" id="" placeholder="ejemplo@dominio.com" required></div>
        <div class="input" title="Ingrese su contraseña">Contraseña<input minlength="8" type="password" placeholder="contraseña" required></div>
        <div id="botones">
            <button type="submit">Iniciar Sesion</button>
            <button type="button" data-bs-toggle="modal" data-bs-target="#registerModal">Registrarse</button>
        </div>
    </form>

    