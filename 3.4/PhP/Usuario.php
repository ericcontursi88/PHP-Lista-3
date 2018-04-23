<?php

/**
 * @author ericc
 */
class Usuario {
    private $login;
    
    	public function __construct($login) {
		$this->login= $login;
	}
	
	public function getLogin() {
		return $this->login;
	}
	
	public function saudacao() {
                echo "Bem vindo: ".$this->login."";
	}
}
