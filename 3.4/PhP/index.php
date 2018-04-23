<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        require_once 'Usuario.php';
        require_once 'Guest.php';
        require_once 'Root.php';
        require_once 'Group.php';
        require_once 'Regular.php';
        
        
                $a = new Usuario ("Eric");
		$a->saudacao();
		
                $b = new Guest("Amanda");
		$b->saudacao();
		$b->permissoes();
		$b->despedidaGuest();
		
		$c = new Root("Marcos");
		$c->saudacao();
		$c->permissoes();
		$c->excluirTodos();
		$c->despedidaRoot();
		
		$d = new Regular("Maria");
		$d->saudacao();
		$d->permissoes();
		$d->dashBoard();
		$d->despedidaRegular();
		
		$e = new Group("Inscritos");
		$e->saudacao();
		$e->permissoes();
		$e->groupBoard();
		$e->despedidaGroup();
        ?>
    </body>
</html>
