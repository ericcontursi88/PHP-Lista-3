<?php

require_once 'Cliente.php';
	class Regular extends CLiente{
		public function consultaTarifa(){
			echo"A tarifa Regular eh 1% do Saldo<br>";
		}
	}
