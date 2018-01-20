<?php 

	require_once 'pessoa.php';
	require_once 'aluno.php';
	require_once 'professor.php';
	require_once 'funcionario.php';

	$p1 = new Pessoa();
	$p2 = new Aluno();
	$p3 = new Professor();
	$p4 = new Funcionario();

	$p1->setNome('Pedro');
	$p2->setNome('Maria');
	$p3->setNome('Claudio');
	$p4->setNome('Fabiana');

	$p2->_setCurso('Informatica');
	$p3->_setSalario(2500.75);
	$p4->_setSetor('Estoque');


	var_dump($p1);
	var_dump($p2);
	var_dump($p3);
	var_dump($p4);



 ?>