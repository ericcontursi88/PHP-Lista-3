<?php
/**
 * @author ericc
 */
require_once 'Usuario.php';
class Root extends Usuario {
    //put your code here
    	public function permissoes() {
		echo "Voce pode criar novos usuarios, alterar permissoes de conta, modificar configuraçoes de segurança como passwords, modificar logs do sistemas, alterar dados.";
	}
	
	public function despedidaRoot() {
		echo "Fim da Sessao";
		
	}
	
	public function excluirTodos() {
		echo "Você poderá excluir todos os usuários.";
	}
}
