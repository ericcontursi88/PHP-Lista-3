<?php

require_once 'Constelacao.php';

class Estrela extends Constelacao {
	
	private $nome;
	private $cor;
	private $temperatura;
	
	public function __construct($nome, $cor, $temperatura) {
		$this->nome = $nome;
		$this->cor = $cor;
		$this->temperatura = $temperatura;	
	}
	 
	public function getNome() {
		return $this->nome;
	}
	
	public function getCor() {
		return $this->cor;
	}
	
	public function getTemperatura() {
		return $this->temperatura;
	}
	
	
	public function mostrar() {
		echo "Nome é :" + $nome;
		echo "A cor é :" + $cor;
		echo "A temperatura é :" + $temperatura;
		
	}


}

?>
