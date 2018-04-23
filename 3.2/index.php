<?php

require_once 'Cliente.php';
require_once 'Vip.php';
require_once 'Premium.php';
require_once 'Regular.php';

$v = new Vip("lulu", 0);
$p = new Premium("Caca", 0);
$r = new Regular("Vava", 0);

$v->consultaTarifa();
$p->consultaTarifa();
$r->consultaTarifa();

?>
