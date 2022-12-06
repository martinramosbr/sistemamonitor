<?php
function teste(&$x)
{
    $x += 2;
    echo "O valor de X é: $x. / ";
}

$a = 3;
teste($a);
echo "O valor de A é: $a";
