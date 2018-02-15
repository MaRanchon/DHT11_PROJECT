<?php
use dao\MeasureDao;
use domain\Measure;

$config = include 'includes/config.inc.php';
include 'includes/autoload.inc.php';

$measureTest = new Measure(95, 99);
$daoTest = new MeasureDao($config);



/*$daoTest->createMeasure($measureTest);*/

/*$resultatTrouve = $daoTest->readMeasureByDateTime("2017-12-14 10:42:37");
var_dump($resultatTrouve);*/

/*$daoTest->deleteMeasureByDateTime("2018-02-07 14:27:36");*/

/*$daoTest->updateMeasure(32, $measureTest);*/

/*$result = $daoTest->readMeasureById(14);
var_dump($result);*/