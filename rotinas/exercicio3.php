<?php

function soma()
{
    $p = func_get_args();
    $t = func_num_args();
    $s = 0;
    for ($i = 0; $i < $t; $i++) {
        $s += $p[$i];
    }
    return $s;
}
$r = soma(3, 2, 10);
echo "A soma dos valores é $r.";
