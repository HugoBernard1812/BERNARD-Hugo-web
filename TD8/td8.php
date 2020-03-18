<?php

session_start();

$initialisation = 1;
$compteur = 1;

if(isset($_SESSION['sess_counter'])){

    $_SESSION['sess_counter'] +=$compteur;
    echo "sess_counter : ". $_SESSION['sess_counter'].'<br>';
    echo session_id().'<br>';

}else{
    $_SESSION['sess_counter']=$initialisation;
    echo 'initialisation compteur <br>';
}

echo 'sess_counter : '. $_SESSION['sess_counter'].'<br>';

if(isset($_SESSION['sess_counter2'])){

    $_SESSION['sess_counter2'] +=1;
    echo "sess_counter2 : ". $_SESSION['sess_counter2'].'<br>';
    echo session_id().'<br>';

}else{
    $_SESSION['sess_counter2']=1;
    echo 'initialisation compteur <br>';
}

echo 'sess_counter2 : '. $_SESSION['sess_counter2'].'<br>';




?>