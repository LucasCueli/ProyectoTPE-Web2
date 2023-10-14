<?php
    require_once('controllers/login.controller.php');
    require_once('controllers/page.controller.php');

    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGIN", BASE_URL . 'login');

    $action = 'index';
    if (!empty ($_GET['action'])){
    $action = $_GET['action'];
    }

    $params = explode('/' , $action);

    switch ($params[0]) {
        case 'index':
            $controller = new pageController();
            $controller->mostrarIndex();
            break;
        case 'procesadores':
            $controller = new pageController();
            $controller->mostrarProcesadores();
            break;
        case 'placas':
            $controller = new pageController();
            $controller->mostrarPlacas();
            break;
        case 'rams':
            $controller = new pageController();
            $controller->mostrarRams();
            break;
        case 'gabinetes':
            $controller = new pageController();
            $controller->mostrarGabinetes();
            break;
        case 'nosotros':
            $controller = new pageController();
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
        default:
            echo "<h1>Error 404 - Page not found </h1>";
            break;
    }
?>
