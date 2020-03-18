<?php

require_once 'vendor/autoload.php';

use \db.config.ini.sample;
use \mywishlist.sql;

class ConnectionExo1{

  try {

    $dsn= 'mysql:host=localhost:dname=mywishlist.sql';
    self::$db = new PDO($dn, $user, $pass, array ( PDO::ATTR_PERSISTENT => true,
                                                   PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                                                   PDO::ATTR_EMULATE_PREPARES => false,
                                                   PDO::ATTR_STRINGIFY_FETCHES => false))

    self::$db->prepare('SET NAMES \'UTF8\'')->execute();

  } catch (PDOException $e) {
    throw new DBException ("Connection: $dsn ", $e->getMessage().'<br/>');
  }


}

?>
