<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Plaquitas</title>
</head>
<body>

<?php
include_once 'Templates/header.php';

$db = new PDO('mysql:host=localhost;'.'dbname=Prueba;charset=utf8', 'root', '');
$query = $db->prepare('SELECT * FROM Transactions');
$query->execute();
$transactions = $query->fetchAll(PDO::FETCH_OBJ);

echo "<ul>";
foreach($transactions as $transaction){
   $query = $db->prepare('SELECT * FROM Products WHERE Product = ?');
   $query->execute([$transaction->Product]);
   $product = $query->fetch(PDO::FETCH_OBJ);
   echo '<li>' . $transaction->Channel . ', ' . $transaction->Product 
   . ', ' . $transaction->Price . ', ' . $product->Material . ', ' . 
   $product->Medium . '</li>';
}

echo "</ul>";

include_once 'Templates/footer.php';
?>
</body>
</html>