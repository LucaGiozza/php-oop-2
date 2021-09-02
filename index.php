<?php

require_once 'Utente.php';
require_once 'Employee.php';

$cliente = new Utente('Luca', 'Giozza');
$cliente->setSconto(80);

$clientePremium = new Employee('Alessia', 'Mocellini');
$clientePremium->setCartaFedeltà(3)


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2><?php echo $cliente->getNameSurname() ?></h2>
<h2><?php echo 'Hai uno sconto del:' . ' ' .   $cliente->getSconto() . '%' ?></h2>


<h2><?php echo $clientePremium->getNameSurname() ?></h2>
<p>  Carta Fedeltà : <?php  echo $clientePremium->getCartaFedeltà() ?></p>


</body>
</html>