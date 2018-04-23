<?php
/**
 * Description of Regular
 *
 * @author ericc
 */
require_once 'Usuario.php';
class Regular extends Usuario{
    
    	public function permissoes() {
		echo "Voce tem permissao de acessar os dados e fazer alterações";
	}
	
	public function despedidaRegular() {
		echo "Fim da Sessao";
	}
	
	public function dashBoard() {
		echo "Acessar sua conta / Upload/ Download/ Ferramentas / Sair";
		
	}
}
