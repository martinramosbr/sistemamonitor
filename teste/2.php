<table class="table">
				
<tbody>
<?php
{licita_disputa} = "1";

	
sc_select(listlotes, "SELECT
   licitacao_lote_item.licitacao_lote_lote,
   licitacao_lote_item.item,
   licitacao_lote_item.ite_valor_real_item_partida,
   licitacao_lote_item.ite_valor_real_item_atual
FROM
   licitacao_lote_item LEFT OUTER JOIN licitacao_lote_item_lances ON licitacao_lote_item.licitacao_lote_licitacao_id = licitacao_lote_item_lances.licitacao_lote_item_licitacao_lote_licitacao_id
WHERE 
   (licitacao_lote_item.licitacao_lote_licitacao_id = '1')");
	
if ( {listlotes} === false ) {

  echo "Erro de acesso. Mensagem = " . {list_lotes_erro};

} else {

  while ( !{listlotes}->EOF ) {

    {id_lote} = {listlotes}->fields[0];
	{id_item} = {listlotes}->fields[1];
	{id_valor} = {listlotes}->fields[2];
	{id_lance} = {listlotes}->fields[3];
	{listlotes}->MoveNext();

  }

  {listlotes}->Close();
}


$listalotesc = {listlotes};

echo  "<tr class='tr-lote' value='$id_lote'>
		<td>". $id_lote ."</td>
		<td>". $id_item ."</td>
		<td>". $id_valor . "</td>
		<td>". $id_lance . "</td>
		</tr>";
?>
						
						<tr class="tr-lote">
							<th scope="row">Lote 1</th>
							<td>20,00</td>
							<td>18,50</td>
							<td>00:00</td>
						</tr>
						
					</tbody>
				</table>