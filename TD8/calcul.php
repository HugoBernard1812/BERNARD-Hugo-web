<?php

if(isset($_GET['a'])) {
    $a = $_GET['a'];
    echo "a : " . $a . '<br>';
} else {
    $a = 0;
    echo "a : " . $a . '<br>';
}
if(isset($_GET['b'])) {
    $b = $_GET['b'];
    echo "b : " . $b . '<br>';
} else {
    $b = 1;
    echo "b : " . $b . '<br>';
}

echo '<br>';

$c = $a + $b;
echo "c : " . $c . '<br>';
$a = $b;
echo "a : " . $a . '<br>';
$b = $c;
echo "b : " . $b . '<br>';

echo '<br>';

$_SESSION['fibonnaci']['a'] = $a;
$_SESSION['fibonnaci']['b'] = $b;

echo "a : " . $_SESSION['fibonnaci']['a'] . '<br>';
echo "b : " . $_SESSION['fibonnaci']['b'] . '<br>';

?>