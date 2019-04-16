<?php
include 'include.php';

$audiRS1 = new Audi('Audi', 'RS1', 100000, 5, 1, 1, 0);
$CBR = new Honda('Honda','CBR',20000,1,true);
$Z50 = new Kawasaki('Renault','R5','500',0,0,'false');

var_dump($audiRS1);
var_dump($CBR);
var_dump($Z50);

?>