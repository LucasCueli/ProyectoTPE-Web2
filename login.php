<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Logearse</title>
</head>
<body>
<?php
   //abro una nueva sesion
   session_start();

   //Si esta logueado lo saludo, sino muestro el form de login
   if(isset($_SESSION["logueado"]) && $_SESSION["logueado"] === true)
       echo "Sesion iniciada como: " . $_SESSION["username"];
   else {   
        function renderForm(){
            echo 
            '<h2>Login</h2>
                <form method="POST">
                    <input type="text" name="email" placeholder="Ingrese su email..."/>
                    <input type="password" name="password" placeholder="Ingrese su password..."/>
                    <a href="register.php">¿No tienes cuenta? Registrate aqui </a>
                    <button>Login</button>'
        ;}
        //Imprimir el formulario
        renderForm();
    }    


   if(!empty($_POST['email'])&& !empty($_POST['password'])){
        $userEmail=$_POST['email'];
        $userPassword=$_POST['password'];

        //Obtengo el usuario de la base de datos
        $db = new PDO('mysql:host=localhost;'.'dbname=tienda computacion;charset=utf8', 'root', '');
        $query = $db->prepare('SELECT * FROM usuarios WHERE email = ?');
        $query->execute([$userEmail]);
        $user = $query->fetch(PDO::FETCH_OBJ);

        //Si el usuario existe y las contraseñas coinciden
        if($user && password_verify($userPassword,($user->password))){
            //Guardo datos en el arreglo de sesion
            $_SESSION["logueado"] = true;
            $_SESSION["username"] = $userEmail;
            var_dump($_SESSION);
            echo "Acceso exitoso";
        }else{
            echo "Acceso denegado";
        }
    }

?>




</body>
</html>