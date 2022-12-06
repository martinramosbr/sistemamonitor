<?php
$n = array(
    array(2, 3),
    array(4, 7),
    array(6, 9)
);
$n[2][0] = $n[1][1];
print_r($n);
