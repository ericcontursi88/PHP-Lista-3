<?php


	require_once 'Estrela.php';
	require_once 'Constelacao.php';
		

		$e1 = new Estrela ("Luigi", "Amarela", 565.1);
		$e2 = new Estrela ("Eric", "Branca", 215.2);
		$e3 = new Estrela ("Wagner", "Vermelha", 458.4);
		$e4 = new Estrela ("Garcia", "Azul", 234.5);
		$c = new Constelacao("Claudia");
		
		$c->adicionar($e1);
		$c->adicionar($e2);
		$c->adicionar($e3);
		$c->adicionar($e4);
		$c->infoEstrelas();

		echo "A temperatura total é: " + $c->tempConstelacao();

?>