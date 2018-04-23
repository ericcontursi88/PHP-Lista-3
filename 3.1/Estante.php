<?php
        include_once 'Categoria.php';
        include_once 'Biblioteca.php';
        include_once 'Livro.php';
        include_once 'index.php';

class Estante {
    private $nome,$max,$cont;
    private $livros = Array(Livro);
    private $catEstante = Categoria;
    
    public function Estante ($nome, Categoria $catEstante, $max){
        $this->nome=$nome;
        $this->cont=$cont;
        $this->max=$max;
        $this->catEstante=$catEstante;
        $this->livros = Livro[$max];
        
    }
    
    public function getNome(){
        return $nome;
    }
    public function getEstante(){
        return catEstante;
    }
    public function getMax(){
        return $max;
    }
    public function getCont(){
        return $cont;
    }
    public function inserirLivro(Livro $livro){
        if($livro != NULL){
            $livros[$cont]=$livro;
            $cont++;
            
        }else{
            echo"Erro...";
        }
    }
    public function removerLivro(Livro $livro){
        for($aux=0;$aux<=$livros.length;$aux++){
            if($livros[$aux]==$livro){
                $livros[aux]=null;
                $cont--;
                break;
            }
        }
    }
    
    public function mostrarLivros(){
        return $livros;
    }
}
