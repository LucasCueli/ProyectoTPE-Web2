<?php
    require_once('controllers/login.controller.php');

    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGIN", BASE_URL . 'login');
    define("VER", BASE_URL . 'ver');
    
    // si no viene una "action", definimos una por defecto
    if ($_GET['action'] == '')
        $_GET['action'] = 'ver';

    // parsea (separa) la url (si viene "sumar/5/8" => [sumar, 5, 8])
    $partesURL = explode('/', $_GET['action']);
    
    switch ($partesURL[0]) {
        case 'login':
            $controller = new LoginController();
            $controller->showLogin();
            break;
        case 'verify':
            $controller = new LoginController();
            $controller->verifyUser();
            break;
        case 'logout':
            $controller = new LoginController();
            $controller->logout();
            break;
        case 'tarea':
            $controller = new TaskController();
            $controller->showTask($partesURL[1]);
            break;
        case 'ver':
            $controller = new TaskController();
            $controller->showTasks();
            break;
        case 'eliminar':
            $controller = new TaskController();
            $controller->deleteTask($partesURL[1]);
            break;
        case 'finalizar':
            $controller = new TaskController();
            $controller->endTask($partesURL[1]);
            break;
        case 'nueva':
            $controller = new TaskController();
            $controller->addTask();
            break;
        default:
            echo "<h1>Error 404 - Page not found </h1>";
            break;
    }
?>
