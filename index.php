<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Martinbr\Page;

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	//teste coneção banco de dados*
	//$sql = new Martinbr\DB\Sql();

	//$results = $sql->select("SELECT * FROM usuario");

	//echo json_encode($results); fim --

	$page = new Page();

	$page->setTpl("index");

});

$app->run();

 ?>