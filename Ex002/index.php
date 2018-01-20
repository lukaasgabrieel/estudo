<?php 

require_once 'celular.php';

	$c1 = new celular();
	$c1->_setNome('Moto G2');
	$c1->_setModelo('G2');
	$c1->_setTela(5);
	$c1->_setSitema('Lollipop');
	$c1->_setBateria(100);

		$c2 = new celular();
	$c2->_setNome('Moto G2');
	$c2->_setModelo('G2');
	$c2->_setTela(5);
	$c2->_setSitema('Lollipop');
	$c2->_setBateria(100);

	$c1->foto();

	var_dump($c1);
	var_dump($c2);

 ?>