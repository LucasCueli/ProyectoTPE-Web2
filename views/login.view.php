<?php	
    class LoginView {
        public function showLogin(){
            require('./templates/login.phtml');
        }

        public function showRegister(){
            require('./templates/register.phtml');
        }
    }
?>