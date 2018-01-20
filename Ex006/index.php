<?php 


$tentativa = 5;
$logica = rand(1,10);

echo $logica;
	if ($tentativa == $logica) {
		echo 'Parabéns';
	}else{
		echo 'Tente Novamente';
	}

 ?>