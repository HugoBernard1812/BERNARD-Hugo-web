<?php


require_once 'vendor/autoload.php';

$app = new \Slim\Slim();



use Illuminate\Database\Capsule\Manager as DB;
use mywishlist\modele\Liste;
use mywishlist\modele\Item;

$db = new DB();
$db->addConnection(parse_ini_file('src/conf/conf.ini'));

$db->setAsGlobal();
$db->bootEloquent();

$app->get('/hello/world', function(){
echo "hello world !<br><br>";
});
$app->run();

try{
  $dsn= 'mysql:host=localhost;dbname=mywishlist';
  $db = new PDO($dsn, 'root', '', array(  PDO::ATTR_PERSISTENT => true,
                                          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                                          PDO::ATTR_EMULATE_PREPARES => false,
                                          PDO::ATTR_STRINGIFY_FETCHES => false));

    $db->prepare('SET NAMES \'UTF8\'')->execute();

} catch (PDOException $e) {
  echo ("Connection: $dsn ".$e->getMessage().'<br/>');
}

$st = $db->prepare('SELECT id, liste_id, nom, descr, img, url, tarif FROM item');

$st->execute();


$st = $db->prepare('SELECT no, user_id, titre, description, expiration, token  FROM liste');

$st->execute();

$sql = 'SELECT * FROM liste';
try {
$stmt = $db->prepare($sql);
$stmt->execute();

foreach($stmt->fetchAll(PDO::FETCH_NUM)as $row){

  print $row[2].' : '.$row[3].'<br>';

  }
}catch (PDOEXception $e){
print $e->getMessage();
}

print '<br>'.'<br>';


$sql = 'SELECT * FROM liste';
try {
$stmt = $db->prepare($sql);
$stmt->execute();

foreach($stmt->fetchAll(PDO::FETCH_NUM)as $row){

  print ' id: '.$row[1].'<br>';

  }
}catch (PDOEXception $e){
print $e->getMessage();
}

print '<br>'.'<br>';


if(isset($_GET['a']))
    $a = $_GET['a'];
else
    $a = '1';

    $sql = 'SELECT * FROM item';
    try {
      $stmt = $db->prepare($sql);
      $stmt->execute();

      foreach($stmt->fetchAll(PDO::FETCH_NUM)as $row){
        if ($row[0]==$a){
          print $row[0].'<br>';
          print $row[1].'<br>';
          print $row[2].'<br>';
          print $row[3].'<br>';
          print $row[4].'<br>';
          print $row[6].'<br>';
        }
      }
}catch (PDOEXception $e){
  print $e->getMessage();
}




?>
