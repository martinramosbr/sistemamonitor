<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Teste_Eco</title>
</head>
<body>
	<div>
		<a href="index.php">Listar Produtos</a>
		<a href="cadastrar.php">Cadastrar Produtos</a>

	</div>
	<h1>Produtos</h1>

	<?php

		include 'connect.php';

		$query = "SELECT num_pedido, nome_cliente, email_cliente, dt_pedido, cod_barras, quantidade, status FROM pedidos";
		$select_db = mysqli_select_db($conn, $data); //seleciona o banco
	?>
</body>
</html>