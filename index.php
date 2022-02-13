<?php 

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$sql = new Martinbr\DB\Sql();

	$results = $sql->select("SELECT * FROM usuario");

	echo json_encode($results);

});

$app->run();

 ?>