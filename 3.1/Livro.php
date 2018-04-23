<?php
        include_once 'Categoria.php';
        include_once 'Estante.php';
        include_once 'Biblioteca.php';
        include_once 'index.php';


class Livro {
    private $nome, $autor, $ano;
    
    public function Livro($nome, $autor,$ano){
        $this->nome=$nome;
        $this->autor=$autor;
        $this->ano=$ano;
                
}

    public function getNome(){
        return $nome;
    } 
    
    public function getAutor(){
        return $autor;
    }
    
    public function getAno(){
        return $ano;
    }
}