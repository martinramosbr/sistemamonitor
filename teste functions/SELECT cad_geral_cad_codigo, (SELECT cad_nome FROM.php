<?php

SELECT cad_geral_cad_codigo, (SELECT cad_nome FROM cad_geral WHERE cad_codigo = cad_geral_cad_codigo) 
FROM sis_filial 
WHERE (fil_n2 = [var_n2] OR [var_n2] = 999999) AND
(fil_nivel = 2 AND fil_x1 = 999999)
ORDER BY (SELECT cad_nome FROM cad_geral WHERE cad_codigo = cad_geral_cad_codigo)




IF ({item} <> ' ' ) { sc_btn_display("new", "off"); }

{licitacao_lote_licitacao_id} 	= [var_os];
{licitacao_lote_lote} 			= [var_lote];

sc_field_readonly({licitacao_lote_licitacao_id}, on);
sc_field_readonly({licitacao_lote_lote}, on);
sc_field_readonly({item}, on);

 sc_lookup(nivel, "
 SELECT lic_nro_oferta, lic_nro_pregao  
 FROM licitacao
 WHERE id = [var_os] ");
 if (FALSE === {nivel}) { }	
  elseif (empty({nivel})) { }	
  else { {ws_nro_oferta} = {nivel[0][0]}; {ws_nro_pregao} = {nivel[0][1]}; }

#inicia

IF ( {ite_status} == 'EX' ) {

$status_licitacao 	= ' ';
$status_lote 		= ' ';
$data_evento     	= DATE ("Y-m-d H:i:s");
{nome_pregoeiro} 	= ' ';

// pregoeiro

   sc_lookup(emp, "
	SELECT cad_nome , cad_fone_2 , cad_codigo
	FROM 
		cad_geral
	WHERE
		cad_codigo = [var_cod_usu] ");
	if (FALSE === {emp}) { }
	elseif (empty({emp})) { } 
	else { {nome_pregoeiro} = ({emp[0][0]} . ' - Celular : ' . {emp[0][1]}); 
		   {ws_codigo_pregoeiro} = {emp[0][2]};  }


sc_lookup(nivel, "
 SELECT tab_licitacao_status_id  
 FROM licitacao
 WHERE id = [var_os] ");
 if (FALSE === {nivel}) { }	
  elseif (empty({nivel})) { }	
  else { $status_licitacao 	= {nivel[0][0]};
		
		if ( $status_licitacao == '1' ) { 
			
			sc_exec_sql("
  				UPDATE 
  	        		licitacao
				SET 
            		tab_licitacao_status_id	= '2' ,
					lic_data_pregao_ini		= '$data_evento'
				WHERE
					id = [var_os] "); 
		}
 }		
		
sc_lookup(nivel, "
 SELECT lot_status  
 FROM licitacao_lote
 WHERE licitacao_id = [var_os] AND 
       lote         = {licitacao_lote_lote} ");
 if (FALSE === {nivel}) { }	
  elseif (empty({nivel})) { }	
  else { $status_lote 	= {nivel[0][0]};
		
		
		if ( $status_lote == 'AT' ) { 
			
			sc_exec_sql("
  				UPDATE 
  	        		licitacao_lote
				SET 
            		lot_status				= 'EX' ,
					lot_data_pregao_ini		= '$data_evento'
				WHERE
					licitacao_id = [var_os] AND
					lote = {licitacao_lote_lote} "); 
		}
 }

// MANDA EMAIL PARA OS PARTICIPANTES DA LICITACAO

sc_select(vlr, "
SELECT
   	cad_geral_cad_codigo  
FROM
    licitacao_fornecedor
WHERE 
   	licitacao_id = [var_os] ");

if (FALSE === {vlr}) {}
else {
	while (!$vlr->EOF) {
		
		   	$cadastro = $vlr->fields[0];
			$nome_origem = ' ';
		    $mail = 'chico.curitiba@gmail.com'; 
		
 			sc_lookup(emp, "
  			SELECT cad_nome , cad_fone_2 , cad_mail
  			FROM 
  				cad_geral
  			WHERE
  				cad_codigo = $cadastro ");
  			if (FALSE === {emp}) { }
  			elseif (empty({emp})) { } 
  			else {  $nome_origem = ({emp[0][0]} . ' - Celular : ' . {emp[0][1]}); 
				    $mail = {emp[0][2]};
				  
				    $msg = ('LicitaFlex - ' . [var_os] . ' Lote : ' . {licitacao_lote_lote} . ' - Item : ' . {item} . ' Teve Liberado para disputa o Pregão em : ' . $data_evento );
				 
					$mail_smtp_server	= 'smtp.ffginfo.com.br';            
					$mail_smtp_user   	= 'licitaflex@ffginfo.com.br';               
					$mail_smtp_pass   	= 'Coxa2022';                     
					$mail_from        	= 'licitaflex@ffginfo.com.br';         
					$mail_to          	= $mail;     
					$mail_subject     	= 'Liberação de Pregão - LicitaFlex';
					$mail_format      	= 'H';     
					$mail_message   	= $msg;
				  
					sc_mail_send($mail_smtp_server,
			 	 	$mail_smtp_user,
			 	 	$mail_smtp_pass,
             	 	$mail_from,
             	 	$mail_to,
            	 	$mail_subject,
           	 		$mail_message,
           	 		$mail_format,
            	 	'',
            	 	'',
           	 		'587',
            	 	'');
// mural

	$observacao = ' ';
				  
	$observacao = 
( 'Liberação de Pregão - LicitaFlex => ' . {licitacao_lote_licitacao_id} . ' - Lote : ' . {licitacao_lote_lote} . ' item : ' . {item} . ' Para o Fornecedor : ' . $nome_origem . ' - em ' . $data_evento . ' Por : ' . {nome_pregoeiro} );				
				sc_exec_sql("
					INSERT INTO 
						licitacao_mural
					(licitacao_id, 
         			pob_quem_origem, 
        			tab_licitacao_mural_acao_id, 
         			pob_data_emissao,
         			pob_data_limite_acao,
         			pob_pergunta,
         			pob_incidencia,  
         			pob_status,
		 			pob_informa_lote_item) 
				VALUES
         			({licitacao_lote_licitacao_id},
		  			{ws_codigo_pregoeiro},
         			'1',		 
         			'$data_evento', 
         			'$data_evento',
         			'$observacao',
         			'1',   
          			'LC',
		  			'N') ");				  
				  
			}
		$vlr->MoveNext();
	}
	
	$vlr->Close();
  }
}

#novo
sc_btn_display("update", "off");

{licitacao_id} 			= [var_os];
{cad_geral_cad_codigo}	= [var_cad];

$sel = ([var_select_contrato] . 'licitacao');

$faz = ' ';

 sc_lookup(nivel, "
 SELECT for_data
 FROM licitacao_fornecedor
 WHERE licitacao_id = [var_os] AND 
       cad_geral_cad_codigo = [var_cad] ");
 if (FALSE === {nivel}) { $faz = 'S'; }
  elseif (empty({nivel})) { $faz = 'S'; }	
  else { sc_alert('JÁ FOI FEITA A ADESÃO PARA ESSE PREGÃO PELO FORNECEDOR'); 
		sc_btn_display("insert", "off"); sc_btn_display("update", "off");
	   }

if ( $faz == 'S' ) {

$sel = ([var_select_contrato] . 'licitacao');

 sc_lookup(nivel, "
 SELECT lic_nro_oferta, lic_nro_pregao , pregoeiro 
 FROM licitacao
 WHERE id = [var_os] ");
 if (FALSE === {nivel}) { }	
  elseif (empty({nivel})) { }	
  else { {ws_nro_oferta} = {nivel[0][0]}; {ws_nro_pregao} = {nivel[0][1]}; 
	     {for_pregoeiro} = {nivel[0][2]}; 
	   }

{for_data} 			= DATE ("Y-m-d H:i:s");
{for_data_evento} 	= DATE ("Y-m-d H:i:s");

sc_field_readonly (ws_nro_oferta, on);
sc_field_readonly (ws_nro_pregao, on);
sc_field_readonly (for_pregoeiro, on);
sc_field_readonly (licitacao_id, on);
sc_field_readonly (cad_geral_cad_codigo, on);

}
#mural
// mural
	
$nome_usuario 	= ' ';
$emailx 		= ' ';

{apelido} = 'Apelidoxxx';

sc_lookup(or, "
 SELECT cad_nome , cad_mail , cad_cpf_cnpj
 FROM 
 cad_geral
 WHERE
 cad_codigo = {cad_geral_cad_codigo} ");
if (FALSE === {or}) { } 
elseif (empty({or})) { }
else {	$nome_usuario = ({or[0][0]} . ' - ' . {or[0][2]});  $emailx = {or[0][1]}; }  

  $data_mov = DATE ("Y-m-d H:i:s");
  $observacao = ' ';
									
	$observacao = 
( 'Aquisição de Acesso a Licitação - LicitaFlex => ' . {licitacao_id} . ' - Nro pregão : ' . {ws_nro_pregao} . ' Por : ' . $nome_usuario . ' - em ' . $data_mov );				

  $data_mov = DATE ("Y-m-d H:i:s");

sc_exec_sql("
	INSERT INTO 
		licitacao_mural
		(licitacao_id, 
         pob_quem_origem, 
         tab_licitacao_mural_acao_id, 
         pob_data_emissao,
         pob_data_limite_acao,
         pob_pergunta,
         pob_incidencia,  
         pob_status,
		 pob_informa_lote_item) 
	VALUES
         ({licitacao_id},
		  {cad_geral_cad_codigo},
         '1',		 
         '$data_mov', 
         '$data_mov',
         '$observacao',
         '1',   
          'LC',
		  'N')
   ");

// REMETE EMAIL 

	$mail_smtp_server	= 'smtp.ffginfo.com.br';            
	$mail_smtp_user   	= 'licitaflex@ffginfo.com.br';               
	$mail_smtp_pass   	= 'Coxa2022';                     
	$mail_from        	= 'licitaflex@ffginfo.com.br';     
	$mail_to          	= $emailx; 
	$mail_subject     	= 'CANAL DE LICITAÇÕES - Aquisição Acesso a Licitação';                            
	$mail_format      	= 'H';    

	$mail_message 		= $observacao; 
		
	sc_mail_send($mail_smtp_server,
			 	 $mail_smtp_user,
			 	 $mail_smtp_pass,
             	 $mail_from,
             	 $mail_to,
            	 $mail_subject,
           	 $mail_message,
           	 $mail_format,
            	 '',
            	 '',
           	 '587',
            	 '');

// GRAVA LOTES E ITENS

sc_select(vlr, "
SELECT
	licitacao_lote_licitacao_id, 
	licitacao_lote_lote, 
	item,
	ite_objeto,	
	ite_qtde_item,	
	ite_unidade_item
FROM
   licitacao_lote_item
WHERE 
   licitacao_lote_licitacao_id = [var_licitacao] ");

if (FALSE === {vlr}) {}
else {
	while (!$vlr->EOF) {
		
		    $fornecedor 					= 0;
		
		    $wlicitacao_lote_licitacao_id 	= $vlr->fields[0];
		    $wlicitacao_lote_lote 			= $vlr->fields[1];
			$witem  						= $vlr->fields[2];
			$wite_objeto					= $vlr->fields[3];
			$wite_qtde_item					= $vlr->fields[4];
			$wite_unidade_item 				= $vlr->fields[5];
		
		    $fornecedor 					= {cad_geral_cad_codigo};

			$insert_table  = 'licitacao_lote_item_propostas';     
			$insert_fields = array(  
     		'licitacao_lote_item_licitacao_lote_licitacao_id' 	=> "'$wlicitacao_lote_licitacao_id'",
			'licitacao_lote_item_licitacao_lote_lote' 			=> "'$wlicitacao_lote_lote'",
     		'licitacao_lote_item_item' 							=> "'$witem'",				
     		'cad_geral_cad_codigo' 								=> "'$fornecedor'",				
     		'lan_objeto' 										=> "'$wite_objeto'",				
     		'lan_qtde' 											=> "'$wite_qtde_item'",				
     		'lan_unidade' 										=> "'$wite_unidade_item'",	
     		'lan_status'										=> "'AT'",					
				
 		);

		$insert_sql = 'INSERT INTO ' . $insert_table
    		. ' ('   . implode(', ', array_keys($insert_fields))   . ')'
    		. ' VALUES ('    . implode(', ', array_values($insert_fields)) . ')';

		sc_exec_sql($insert_sql);
						
		$vlr->MoveNext();
	}
	
	$vlr->Close();		
	
 }

			$insert_table  = 'licitacao_propostas_chk';     
			$insert_fields = array(  
     		'licitacao_id' 										=> "'[var_licitacao]'",	
     		'cad_geral_cad_codigo' 								=> "'{cad_geral_cad_codigo}'",				
     		'lan_etapa_1' 										=> "'A'",				
     		'lan_etapa_2' 										=> "'A'",				
     		'lan_etapa_3' 										=> "'A'",	
     		'lan_etapa_4' 										=> "'A'",					
     		'lan_etapa_5' 										=> "'A'",				
 		);

		$insert_sql = 'INSERT INTO ' . $insert_table
    		. ' ('   . implode(', ', array_keys($insert_fields))   . ')'
    		. ' VALUES ('    . implode(', ', array_values($insert_fields)) . ')';

		sc_exec_sql($insert_sql);

?>

<?php

IF ({moa_sequencia} <> ' ') { sc_btn_display("new", "off"); }

{licitacao_id} 		= [var_os];

sc_field_readonly (licitacao_id, on)

sc_field_display({moa_nome_de_arquivo}, off);	
sc_field_display({moa_link}, off);
sc_field_display({moa_youtube}, off);
sc_field_display({moa_lote}, off);
sc_field_display({moa_item}, off);
							   
if ({moa_tipo} == '1' or {moa_tipo} == '4')
	{   sc_field_display({moa_nome_de_arquivo}, off);	
		sc_field_display({moa_link}, on);
		sc_field_display({moa_youtube}, off);
	}

if ({moa_tipo} == '2')
	{   sc_field_display({moa_nome_de_arquivo}, on);	
		sc_field_display({moa_link}, off);
		sc_field_display({moa_youtube}, off);
	}

if ({moa_tipo} == '3')
	{   sc_field_display({moa_nome_de_arquivo}, off);	
		sc_field_display({moa_link}, off);
		sc_field_display({moa_youtube}, on);
	}


$sel = ([var_select_contrato] . 'licitacao');

 sc_lookup(nivel, "
 SELECT lic_nro_oferta, lic_nro_pregao  
 FROM $sel
 WHERE id = [var_os] ");
 if (FALSE === {nivel}) { }	
  elseif (empty({nivel})) { }	
  else { {ws_nro_oferta} = {nivel[0][0]}; {ws_nro_pregao} = {nivel[0][1]}; }



  ?>