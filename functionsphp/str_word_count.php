<?php
#conta a quantidade de palavras.
$frase = "Em desenvolvimento php";
$cont = str_word_count($frase, 0);
/**
 * 0 conta a quantidade de palavras.
 * 1 cria um vetor(Arry).
 * 2 cria um vetor passando a posição de cada um deles.
 */
print_r($cont);
