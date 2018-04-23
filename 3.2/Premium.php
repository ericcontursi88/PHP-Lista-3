<?php

require_once 'Cliente.php';
	class Premium extends Cliente{
		private function consultaTarifa(){
			echo"A tarifa Premium eh 2% do Saldo <br>";
		}

	}
