<!DOCTYPE html>
<html>
<head>
	<?php 
	$txt = isset($_GET["t"])?$_GET["t"]:"Texto Generico<br>";
	$tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
	$cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";

	 ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<!-<style>
		span.texto{
			font-size: <?php echo $tam; ?>;
			color: <?php echo $cor; ?>;
		}
	</style>-->
</head>
<body>

<!--<?php 
#media

	#$nota1 = isset($_GET["nota1"])?$_GET["nota1"]:"[Você não digitou a nota 1!]";
	#$nota2 = isset($_GET["nota2"])?$_GET["nota2"]:"[você não digitou a nota 2!]";

	#$media = ($nota1 + $nota2) / 2;
	
	#if ($media >= 7) {
	#	$resultado = "Aprovado";
	#}else{
	#	if ($media <= 4) {
	#		$resultado = "Reprovado";
	#	}else {
	#		$resultado = "Recuperação";
	#	}
	#}
	#echo "A media entre $nota1 e $nota2 é: $media.<br/>";
	#echo "A Situação do aluno é: $resultado";


#Cores
echo "<span class='texto'>$txt<span>";
/**
* $a = isset($_GET["ano"])?$_GET["ano"]:"[Voce nasceu em que ano?]";
*$i = date("Y") - $a;
*echo "Você nasceu em $a e tem $i anos. ";
*	if($i < 16){
*		$vota = "não vota. ";		
*	}else{
*		if (($i >= 16 && $i <18) || ( $i>65 )) {
*			$vota = "voto opcional. ";
*		}else{
*		$vota = "voto obrigatorio. ";
*		
*	}
*}
*echo "O seu tipo de voto é $vota";
*/
/*$a = isset($_GET["ano"])?$_GET["ano"]:"[Voce nasceu em que ano?]";
$i = date("Y") - $a;
echo "Você nasceu em $a e tem $i anos. ";
	if($i < 16){
		$vota = "não vota. ";		
	}elseif (($i >= 16 && $i <18) || ( $i>65 )) {
			$vota = "voto opcional. ";
		}else{
		$vota = "voto obrigatorio. ";
}
echo "O seu tipo de voto é $vota";
*/

/* cadastro GET
$nome = isset($_GET["nome"])?$_GET["nome"]:"[Não informado]";
$ano = isset($_GET["ano"])?$_GET["ano"]:0;
$sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[Sem sexo]";
$idade = date("Y") - $ano;

echo "A idade de $nome é: $idade, $sexo";*/

 ?>
 <br/><a href="index.php">Voltar</a>-->
</body>
</html>
