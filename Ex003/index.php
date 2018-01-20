<?php 

	require_once 'video.php';
	require_once 'gafanhoto.php';

	$v[0] = new video("Aula 1 de POO");
	$v[1] = new video("Aula 12 de PHP");
	$v[2] = new video("Aula 15 de HTML5");

	$g[0] = new Gafanhoto("Jubileu", 22, "M","JUBA");
	$g[1] = new Gafanhoto("Creuza", 72, "F","Creuzinha");
	var_dump($g);

	var_dump($v)
 ?>