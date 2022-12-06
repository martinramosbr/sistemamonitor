<?php
$txt = "Aqui temos um texto gigante criado pelo php e vai mostrar o funcionamento da função wordwrap";
$r = wordwrap($txt, 8, "<br>\n", false);
echo $r;
