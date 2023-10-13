<?php
    include_once('../views/login.phtml');
    include_once('../models/user.model.php');

class LoginController {
    private $view;
    private $model;

    public function __construct() {
        $this->model = new StoreModel();
    }


    public function verifyUser() {
        $email = $_POST['username'];
        $password = $_POST['password'];

        $user = $this->model->getByUsername($email);

        // encontró un user con el username que mandó, y tiene la misma contraseña
        if (!empty($user) && password_verify($password, $user->password)) {
            
            // INICIO LA SESSION Y LOGUEO AL USUARIO
            session_start();
            $_SESSION["logueado"] = true;
            $_SESSION['ID_USER'] = $user->id_usuario;
            $_SESSION['USERNAME'] = $user->email;

            header('Location: ../views/index.phtml');
        } else {
            echo("Login incorrecto");
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        header('Location: ' .  LOGIN);
    }

}
    $controller = new LoginController();
    $controller->verifyUser();

