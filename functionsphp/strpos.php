<?php
$frase = "Estudo php intenso";
$pos = strpos($frase, "php"); // é case sensitive;
echo "A string foi encontrada na posição $pos";
$pos = stripos($frase, "PHP"); // não é case sensitive;