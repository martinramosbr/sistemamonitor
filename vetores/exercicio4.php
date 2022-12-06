<?php
$cad = array(
    "nome" => "Ana",
    "idade" => 23,
    "peso" => 78.5
);
$cad["fuma"] = true;
//print_r($cad);
foreach ($cad as $campo => $valor) {
    echo "O campo $campo possui o conteudo $valor \n";
}
