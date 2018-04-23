<?php

class Constelacao {
	
	private $nome;
	private $estrelas = array();

	
	public function __construct($nome) {
		$this->nome = $nome;
		 
	}

	public function getNome(){
		return $this->nome;
	}

	public function getEstrelas(){
		return $this->estrelas;
	}

	
	public function adicionar(Estrela $object) {	
			$this->estrelas[] = $object;
			


	}		
		
	public function infoEstrelas() {

	
		foreach ($this->estrelas as $rows) {
			$rows->mostrar();
			echo "<br/>";
		}

	}

	public function tempConstelacao(){
		
		$auxTemperatura = 0.0;
		
		
		for($i = 0; $i < count($this->estrelas); $i++){

			$auxTemperatura += $this->estrelas[$i]->getTemperatura();
			
		}
		
		return $auxTemperatura;

	}
	
	}
?>
