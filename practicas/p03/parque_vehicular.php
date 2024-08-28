<?php

$parque = array('UBN6338' => array(
	'Auto' => array('marca' => 'HONDA', 'modelo' => '2020', 'tipo' => 'camioneta'),
	'Propietario' => array(
		'nombre' => 'Alfonzo Esparza',
		'ciudad' => 'Puebla, Pue.',
		'direccion' => 'C.U., Jardines de San Manuel'
	)
), 'UBN6339' => array(
	'Auto' => array('marca' => 'MAZDA', 'modelo' => '2019', 'tipo' => 'sedan'),
	'Propietario' => array(
		'nombre' => 'Ma. del Consuelo Molina',
		'ciudad' => 'Puebla, Pue.',
		'direccion' => '97 oriente'
	)
)
			   );
/*
foreach ($parque as $value) {
	# code...
	print_r($value);
	echo '<br><br>';
}

foreach ($variable as $key => $value) {
	# code...
}*/

print_r($parque);
?>