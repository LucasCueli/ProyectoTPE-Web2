<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Procesadores</title>
</head>
<body>
<?php include_once 'Templates/header.php';?>

<h1>Procesadores</h1>

<section class="productos">
        <article class="producto">
            <img src="https://images.unsplash.com/photo-1591799264318-7e6ef8ddb7ea?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8UHJvY2VzYWRvcmVzfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60" alt="Procesador">
            <h2>Procesadores</h2>
            <p>Estos chips están diseñados para realizar cálculos y tareas de procesamiento de datos en una máquina. Los procesadores ejecutan instrucciones de software, manipulan datos y gestionan diversas operaciones que permiten que una computadora funcione de manera eficiente y realice una amplia gama de tareas.</p>
            <div class="outer">
                <div class="button_slide slide_left"><a href="procesadores.php">Ir a la Seccion</a></div>
            </div>
        </article>
</section>

<?php

$db = new PDO('mysql:host=localhost;'.'dbname=Prueba;charset=utf8', 'root', '');
$query = $db->prepare('SELECT * FROM Transactions');
$query->execute();
$transactions = $query->fetchAll(PDO::FETCH_OBJ);

echo "<section class='productos'>";
foreach($transactions as $transaction){
   $query = $db->prepare('SELECT * FROM Products WHERE Product = ?');
   $query->execute([$transaction->Product]);
   $product = $query->fetch(PDO::FETCH_OBJ);
   echo '<article class="producto">' . $transaction->Channel . '<h2>' . $transaction->Product . '</h2>'
   .  '<p>' . $transaction->Price . ', ' . $product->Material . ', ' . 
   $product->Medium .  '</p>' .'</article>';
}

echo "</section"; ?>

<h1>q</h1>
<?php include_once 'Templates/footer.php';?>
</body>
</html>