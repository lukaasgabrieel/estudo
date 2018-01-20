<?php 

	require_once "copo.php";

	$c[1] = new Copo();
	$c[1]->_setCor('Branco');
	$c[1]->encherCopo();
	$c[1]->_setDono('Lucas');
	$c[1]->beber();

	var_dump($c)

 ?>