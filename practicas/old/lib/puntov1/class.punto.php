<?php
namespace TECWEB\API\V1;

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

	public static function distancia($punto1, $punto2) {
		return sqrt( pow($punto2->getY()-$punto1->getY(),2) + pow($punto2->getX()-$punto1->getX(),2) );
	}

	public function verPunto($formato=NULL) {
		echo '('.$this->x.','.$this->y.')';
	}
}
?>