<?php 

require_once 'caneta.php';

	$c[1] = new Caneta();
	$c[1]->_setPonta(0.5);
	$c[1]->_setCor("Azul");
	$c[1]->_setNome('BIC');
	$c[1]->escrever();
	var_dump($c)

?>