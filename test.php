<?php
try {
    $bdd = new PDO('mysql:host=92.222.93.228;dbname=dht11;charset=utf8', 'dht11', 'dht11');
}
catch(Exception $e) {
    die('Erreur :' . $e->getMessage());
}


$config = include 'includes/config.inc';


$reponse = $bdd->query("SELECT temperature, humidite FROM releves ORDER BY id DESC LIMIT 0, 1");

