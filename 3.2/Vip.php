<?php

require_once 'Cliente.php';
	class Vip extends Cliente {

	//public function calcTarifaVip(){
	//	$tarifa = $saldo * 0004;

	//	echo"Sua tarifa e " + $tarifa;
	//}

		public function consultaTarifa(){
			echo"A tarifa Vip eh 4% do Saldo <br> ";
		}
	}

?>
