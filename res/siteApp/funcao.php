<?php 
/**
 * DIAS ENTRE 02 DATAS
 * @author Norberto ALcântara
 * @copyright (c) Célula Nerd, 2019
 * 
 * @param type $data_inicial 2013-08-01
 * @param type $data_final 2013-08-16
 * @return type
 */
function diasDatas($data_inicial='2013-08-01',$data_final='2013-08-16') {
    $diferenca = strtotime($data_final) - strtotime($data_inicial);
    $dias = floor($diferenca / (60 * 60 * 24)); 
    return $dias;
}

 ?>