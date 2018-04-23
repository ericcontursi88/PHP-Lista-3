<?php
/**
 * @author ericc
 */
require_once 'Usuario.php';
class Guest extends Usuario {
    //put your code here
    	public function permissoes() {
		echo "Voce tem permissao de ler os dados da pagina";
	}
	
	public function despedidaGuest() {
		echo "Fim da Sessao";
	}
    
}
