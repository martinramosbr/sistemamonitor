<?php
/*$host = "127.0.0.1";
$usuario = "root";
$senha = "";
$bd = "chatteste";

$mysqli = new mysqli($host, $usuario, $senha, $bd);
if ($mysqli->connect_errno)
    echo "Falha na conexão: (" . $mysqli->connect_errno . ")" . $mysqli->connect_error;

$db_selected = mysql_select_db('chatteste', $mysqli);

if (!$db_selected) {
    die('Can\'t use foo : ' . mysql_error());
}*/
#$query = "SELECT * from chat";
#$result = mysql_query($query);
#echo $result;

$conn = mysqli_connect('127.0.0.1:3306', 'root', '');
$dbname = mysqli_select_db($conn, 'chatteste');
mysqli_set_charset($conn, 'utf8');


$sql = mysqli_query($conn, "SELECT * FROM chat") or die("Erro");
while ($dados = mysqli_fetch_assoc($sql)) {
    var_dump($dados);
    exit;
}
$query = mysqli_query($conn, "INSERT INTO chat values(default,'3','mensagem')");


###########
    if ($sessione != NULL) {
        $sql = mysqli_query($conn, "SELECT * FROM chat");
    }

    while ($row = mysqli_fetch_array($sql)) {
        echo "Fornecedor $row[1]: $row[2]<br>";
    }

    //Scriptcase
    <?php
                sc_lookup(mensagens_chat, "select msg_chat from chat where id_licitacao = '$licita_disputa' order by id_chat");
                if(!empty({mensagens_chat})) {
                    foreach({mensagens_chat} as $key) {
                    echo "Fornecedor $usersala: ".$key[0]. "<br>";
                    }
                }
            ?>

                                <tbody>
                        {loop="listlotes"}
                        <tr class="tr-lote">
                            <th scope="row">Lote 1</th>
                            <td>20,00</td>
                            <td>18,50</td><td class="novo_lance"> <form action="../lote_item_negocia_crono/" method="post"><input type="number" style="width: 100px;"> <button type="submit" style="width:60px ;"> Ofertar </button></form></td>
                            <!--<td><form class="uplance"><input type="value"><button type="submit" class="btn btn-primary mb-2"></button></form></td>-->
                            <td>09:02</td>
                        </tr>
                        {/loop}                 
                    </tbody>
                </table>