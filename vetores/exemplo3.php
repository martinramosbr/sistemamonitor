<?php
$v = array(
    1 => "A",
    3 => "B",
    6 => "C",
    8 => "D"
);
$v[] = "E";
unset($v[3]);
print_r($v);
