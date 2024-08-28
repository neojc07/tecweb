<?php
namespace TECWEB\API\V2;

class Punto {
	private $x;
	private $y;
	
	public function __construct($x=0, $y=0) {
		$this->x = $x;
		$this->y = $y;
	}

	public function setX($coorx) {
		$this->x = $coorx;
	}

	public function setY($coory) {
		$this->y = $coory;
	}

	public function getX() {
		return $this->x;
	}

	public function getY() {
		return $this->y;
	}

	public static function pendiente($punto1, $punto2) {
		return ($punto2->getY()-$punto1->getY())/($punto2->getX()-$punto1->getX());
	}

	public function verPunto($formato=NULL) {
		echo 'x = '.$this->x.'<br>y = '.$this->y;
	}
}


$unPunto = new Punto(3, 4);
$unPunto->verPunto();
echo '<br>';
$unPunto->setX(1);
$unPunto->setY(2);
$unPunto->verPunto();

echo '<br><br>';

$otroPunto = new Punto;
$otroPunto->setX(3);
$otroPunto->setY(3);
$otroPunto->verPunto(2);

echo '<br><br>';
echo 'Pendiente entre dos puntos: '.Punto::pendiente($unPunto, $otroPunto);

?>