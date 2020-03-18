<?php

session_start();

$a = $_GET['a'];
$b = $_GET['b'];

$_SESSION['fibonnaci'] = [$a,$b];

var_dump($_SESSION);

echo "<h1>Suite de Fibo créée !</h1>";

echo '<a href="fibonacci.php"> La suite !</a>';

?>