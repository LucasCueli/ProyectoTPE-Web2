<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registrarse</title>
</head>
<body>

    <a href="http://"></a>
<?php

   function renderForm(){
       echo '
           <h2>Registrarse</h2>
           <form method="POST">
               <input type="text" name="email" placeholder="Ingrese su email..."/>
               <input type="password" name="password" placeholder="Ingrese su password..."/>
               <button>Registrarse</button>
               
       ';
   }

   //Imprimir el formulario
   renderForm();


    if(!empty($_POST['email'])&& !empty($_POST['password'])){
        $userEmail=$_POST['email'];
        $userPassword=password_hash($_POST['password'], PASSWORD_BCRYPT);
 
        //Guardo el nuevo usuario en la base de datos
        $db = new PDO('mysql:host=localhost;'.'dbname=tienda computacion;charset=utf8', 'root', '');
        $query = $db->prepare('INSERT INTO usuarios (email, password) VALUES (? , ?)');
        $query->execute([$userEmail,$userPassword]);
      
    }


?>




</body>
</html>