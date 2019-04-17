<?php
include 'include.php';

$audiRS1 = new Audi('Audi', 'RS1', 100000, 5, 1, 1, 0);
$z900 = new Kawasaki('Z900', 9200, true);
$audiRS1->clim=4;
$z750 = new Kawasaki('z750','12000','0');
$z750 -> clim=3;


var_dump($audiRS1);
var_dump($z900);

?>