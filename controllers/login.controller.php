<?php
    include_once('./views/login.view.php');
    include_once('./models/user.model.php');

class LoginController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new UserModel();
        $this->view = new LoginView();
    }

    public function mostrarLogin(){
        $this->view->showLogin();
    }

    public function register(){
        $this->view->showRegister();
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

            header('Location: ' . BASE_URL . 'index');
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


