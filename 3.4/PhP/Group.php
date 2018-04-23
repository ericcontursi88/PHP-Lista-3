<?php
/**
 * @author ericc
 */
require_once 'Usuario.php';
class Group extends Usuario{
    //put your code here
    	public function permissoes() {
		echo "Seu grupo tem permissao de ler, acessar e alterar dados";
	}
	
	public function despedidaGroup() {
		echo "Fim da Sessao";
	}
	
	public function groupBoard() {
		echo "Você pode apagar usuários de seu grupo.";
	}
}
