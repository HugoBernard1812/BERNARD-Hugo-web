<?php

require_once 'vendor/autoload.php';
use Illuminate\Database\Capsule\Manager as DB;


$db = new DB();
$db->addConnection( [
    'driver' => 'mysql',
    'host' => 'localhost',
    'database' => 'bernar276u',
    'username' => 'bernar276u',
    'password' => 'GloBeauX128',
    'charset' => 'utf8',
    'collection' => 'utf8_unicode_ci'

] );

$db->setAsGlobal();
$db->bootEloquent();

$listes = liste::select('no', 'user_id', 'titre', 'description', 'expiration', 'token')
            ->get();
foreach ($listes as $liste) {
    echo $liste->titre.' : '.$liste->description.'<br>';
}

$items = item::select('id', 'liste_id', 'nom', 'descr', 'img', 'url', 'tarif')
            ->get();
foreach ($items as $item) {
    echo $items->id.' : '.$items->descr;
}

if(isset($_GET['a']))
    $a = $_GET['a'];
else
    $a = 12;

$items2 = item::where( 'id', '=', $a )->first();
echo $items2->id ;

$i = new item();
$i->no = 4;
$i->user_id = 4;
$i->titre = 'a';
$i->description = 'b';
$i->expiration = '2019/12-18';
$i->token = 'nosecure4';
$i->save();
?>