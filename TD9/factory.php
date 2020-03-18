<?php

require_once 'vendor/autoload.php';

use \lbs\bd\ConnectionFactory;

ConnectionFactory::setConfig('./db.config.ini');

$db = ConnectionFactory::makeConnection();

$st = $db->prepare('SELECT * FROM item ORDER BY id DESC');

$st->execute();

//while($row = $st->fetch(PDO::FETCH_ASSOC))
foreach ($st->fetchAll(PDO::FETCH_ASSOC) as $row) {
	print_r($row); echo '<br>';
}