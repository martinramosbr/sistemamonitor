<?php
$n = array(3, 5, 8, 2);
$m = array("A", "C", "F", "E", "D");
$o = array(1, 2, 3, 4, 5, 6);
$p = array(2 => 1, 5 => 2, 0 => 3, 3 => 4, 4 => 5);
$q = array(1 => "A", 2 => "B", 3 => "V", 4 => "C");
sort($n); //ordena os valores em ordem, alterando os indices;
asort($m); //ordena os valores em ordem, sem alterar os indices;
arsort($o); //ordena em ordem reversa os valores;
ksort($p); //ordena os indices;
krsort($q); //inverte os indices para ordem decressente mantendo os valores em suas posições;
print_r($n);
echo "\n";
print_r($m);
echo "\n";
print_r($o);
echo "\n";
print_r($p);
echo "\n";
print_r($q);
