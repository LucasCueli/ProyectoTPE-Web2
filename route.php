<?php
    require_once('controllers/login.controller.php');
    require_once('controllers/products.controller.php');

    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGIN", BASE_URL . 'login');

    $action = 'index';
    if (!empty ($_GET['action'])){
    $action = $_GET['action'];
    }

    $partesURL = explode('/' , $action);

    switch ($partesURL[0]) {
        case 'index':
            $controller = new ProductController();
            $controller->mostrarIndex();
            break;
        case 'procesadores':
            $controller = new ProductController();
            $controller->mostrarProcesadores();
            $controller->showProcesadores();
            $controller->checkLoggedIn();
            break;
        case 'placas':
            $controller = new ProductController();
            $controller->mostrarPlacas();
            $controller->showGraficas();
            $controller->checkLoggedIn();
            break;
        case 'rams':
            $controller = new ProductController();
            $controller->mostrarRams();
            $controller->showRams();
            $controller->checkLoggedIn();
            break;
        case 'gabinetes':
            $controller = new ProductController();
            $controller->mostrarGabinetes();
            $controller->showGabinetes();
            $controller->checkLoggedIn();
            break;
        case 'nosotros':
            $controller = new ProductController();
            $controller->mostrarNosotros();
            break;
        case 'login':
            $controller = new LoginController();
            $controller->mostrarLogin();
            break;
        case 'verify':
            $controller = new LoginController();
            $controller->verifyUser();
            break;
        case 'logout':
            $controller = new LoginController();
            $controller->logout();
            break;
        case 'register':
            $controller = new LoginController();
            $controller->register();
            break;
        case 'user_register':
            $controller = new LoginController();
            $controller->userRegister();
        default:
            echo "<h1>Error 404 - Page not found </h1>";
            break;
    }
?>
