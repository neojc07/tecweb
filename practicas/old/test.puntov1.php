<?php
use TECWEB\API\V1\Punto;
require_once __DIR__ . './lib/puntov1/class.punto.php';

$unPunto = new Punto(3, 4);
$unPunto->verPunto();
echo '<br>';
$unPunto->setX(1);
$unPunto->setY(2);
$unPunto->verPunto();

echo '<br><br>';

$otroPunto = new Punto;
$otroPunto->setX(3.5);
$otroPunto->setY(2);
$otroPunto->verPunto(2);

echo '<br><br>';
echo 'Distancia entre dos puntos: '.Punto::distancia($unPunto, $otroPunto);
?>