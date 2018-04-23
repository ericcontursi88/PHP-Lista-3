<?php
        include_once 'Categoria.php';
        include_once 'Estante.php';
        include_once 'Livro.php';
        include_once 'index.php';
class Biblioteca {
    private $nome;
    private $estantes = array();
    private $cont;
    
    public function Biblioteca($nome){
        $this->nome = $nome;
        $this->estantes = new ArrayObject();
        
    }
    public function getNome(){
        return $nome;
    }
    
    public function inserirEstante (Estante $estante){
        if($estante!=null){
            $estantes.add($estante);
        }else {
            echo "Erro";
        }
    }
    
    public function mostrarEstantes(){
        return $estantes;
    }
    public function listarEstantes(){
        $cont=0;
        foreach ($estante as $estantes){
            echo ++$cont." ".getNome()." de ".Estante.getCatEstante();
        }
    }
    public function contarCiencia(){
        $cont=0;
        
        foreach ($estante as $estantes){
            if(Estante.getCatEstante()== Categoria.Ciencia()){
                for($aux=0;$aux<Estante.getCont();$aux++){
                    $cont++;
                }
            }
        }
        return $cont;
    }
    
    public function listarTudo(){
         $l= ArrayObject(Livro);
        
        $cont=0;
        foreach ($estante as $estantes){
            $l= Estante.mostrarLivros();
            for($i=0;$i<Estante.getCont();$i++){
                if($l[$i]!=NULL){
                    echo ++$cont." ".$l[$cont].getNome()."escrito por ".$l[$cont].getAutor();
                }
            }
        }
        
    }
    public function listarFilosofia(){
        $lf = ArrayObject(Livro);
        foreach($estante as $estantes){
            if(Estante.getCatEstante()== Categoria.Filosofia()){
                for($a=0;$a<Estante.getCont();$a++){
                    if(Estante.mostrarLivros()[$a]!=null){
                        $lf[$a]= Estante.mostrarLivros()[$a];
                    }
                }
            }
        }
        return $lf;
    }
    
    public function listarCiencia(){
        $lc = ArrayObject(Livro);
        foreach ($estante as $estantes){
            if(Estante.getCatEstante()== Categoria.Ciencia){
                for($ax=0;$ax<Estante.getCont();$ax++){
                    if(Estante.mostrarLivros()[$ax]!=null){
                            $lc[$ax]= Estante.mostrarLivros()[$ax];
                    }
                }
            }
        }
        return $lc;
    }
    
    public function listarLiteratura(){
        $ll= ArrayObject(Livro);
         foreach ($estante as $estantes){
            if(Estante.getCatEstante()== Categoria.Literatura){
                for($ax=0;$ax<Estante.getCont();$ax++){
                    if(Estante.mostrarLivros()[$ax]!=null){
                            $ll[$ax]= Estante.mostrarLivros()[$ax];
                    }
                }
            }
        
        }
        return $ll;
    }
    
    public function listarAutores(Categoria $cat){
        $al = array();
        $l = ArrayObject(Livro);
        foreach($estante as $estantes){
            if(Estante.getCatEstante()==cat){
                $l = Estante.mostrarLivros();
                for($aux=0; $aux<Estante.getCont();$aux++){
                    $al.add(($l[$aux].getAutor()));
                }
            }
        }
        return $al;
    }
    
}
