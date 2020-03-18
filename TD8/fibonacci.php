<?php

session_start();


if(isset($_GET['a']))
    $a = $_GET['a'];
else
    $a = 0;
if(isset($_GET['b']))
    $b = $_GET['b'];
else
    $b = 1;

$_SESSION['fibonnaci'] = ['a' => $a, 'b' => $b];






    if (isset($_SESSION['fibonnaci'])) {
        $c = $a + $b;

        $_SESSION['fibonnaci']['a'] = $b;
        echo "a : " . $_SESSION['fibonnaci']['a'] . '<br>';
        $_SESSION['fibonnaci']['b'] = $c;
        echo "b : " . $_SESSION['fibonnaci']['b'] . '<br>';


    } else {

        $_SESSION['fibonnaci']['a'] = $a;
        $_SESSION['fibonnaci']['b'] = $b;
        echo "a : " . $_SESSION['fibonnaci']['a'] . '<br>';
        echo "b : " . $_SESSION['fibonnaci']['b'] . '<br>';
    }








?>