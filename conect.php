<?php

$conn = mysqli_connect('127.0.0.1:3306', 'root', '');
$dbname = mysqli_select_db($conn, 'chatteste');
mysqli_set_charset($conn, 'utf8');
?>

<?php

$host = 'localhost:3306';
$data = 'licitacao';
$usuario = 'root';
$pass = '';


$conn = mysqli_connect($host, $usuario, $pass);

$select_db = mysqli_select_db($conn, $data); //seleciona o banco

$query = "SELECT * FROM licitacao.cad_usuario"; //select desejado

$result_query = mysqli_query($conn, $query); //resultado da consulta
print_r($result_query);""
?>