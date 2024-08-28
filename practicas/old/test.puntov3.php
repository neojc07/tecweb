<?php

use TECWEB\API\V1\Punto as PuntoV1;
use TECWEB\API\V2\Punto as PuntoV2;

require_once __DIR__ . './lib/puntov1/class.punto.php';
require_once __DIR__ . './lib/puntov2/class.punto.php';

$unPunto = new PuntoV1(3, 4);
$unPunto->verPunto();
echo '<br>';
$unPunto->setX(1);
$unPunto->setY(2);
$unPunto->verPunto();

echo '<br><br>';

$otroPunto = new PuntoV1;
$otroPunto->setX(3.5);
$otroPunto->setY(2);
$otroPunto->verPunto(2);

echo '<br><br>';
echo 'Distancia entre dos puntos: '.PuntoV1::distancia($unPunto, $otroPunto);

echo '<br><br>';
echo '<hr>';
echo '<br><br>';

$unPunto = new PuntoV2(3, 4);
$unPunto->verPunto();
echo '<br>';
$unPunto->setX(1);
$unPunto->setY(2);
$unPunto->verPunto();

echo '<br><br>';

$otroPunto = new PuntoV2;
$otroPunto->setX(3);
$otroPunto->setY(3);
$otroPunto->verPunto(2);

echo '<br><br>';
echo 'Distancia entre dos puntos: '.PuntoV2::pendiente($unPunto, $otroPunto);
?>