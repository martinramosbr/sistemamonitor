<?php 
session_start();
require_once("vendor/autoload.php");

use \Slim\Slim;
use \Martinbr\Page;
use \Martinbr\PageSistema;
use \Martinbr\Model\User;

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

$app->get('/sistema', function() {

	User::verifyLogin();

	$page = new PageSistema();

	$page->setTpl("index");


}); 

$app->get('/sistema/login', function() {

	$page = new PageSistema([
		"header"=>false,
		"footer"=>false
	]);

	$page->setTpl("login");

}); 

$app->post('/sistema/login', function() {

	User::login($_POST["user"], $_POST["password"]);

	header("Location: /sistema");
	exit;
});

$app->get('/sistema/logout', function() {

	User::logout();

	header("Location: /sistema/login");
	exit;

});

$app->get("/sistema/users", function() {

	User::verifyLogin();

	$users = User::listAll();

	$page = new PageSistema();

	$page->setTpl("users", array(
		
		"users"=>$users
	));

});

$app->get("/sistema/novo-usuario", function() {

	User::verifyLogin();

	$page = new PageSistema();

	$page->setTpl("new-users");

});

$app->post("/sistema/novo-usuario", function() {

	User::verifyLogin();

	//var_dump($_POST);
	$user = new User();

	$user->setData($_POST);

	$user->save();

	header("Location: /sistema/users");
	exit;

	//var_dump($user);

});

$app->get("/sistema/orgaos", function() {

	User::verifyLogin();

	$orgao = User::listAllorgaos();

	$page = new PageSistema();

	$page->setTpl("orgao", array(

		"orgao"=>$orgao

	));

	/*	$users = User::listAll();

		$page = new PageSistema();

		$page->setTpl("users", array(
		
			"users"=>$users
		));*/

});

$app->get("/sistema/novo-orgao", function() {

	User::verifyLogin();

	$page = new PageSistema();

	$page->setTpl("new-orgaos");

});

$app->post("/sistema/novo-orgao", function() {

	User::verifyLogin();

	//var_dump($_POST);
	$orgao = new User();

	$orgao->setData($_POST);

	$orgao->save();

	header("Location: /sistema/orgaos");
	exit;

	//var_dump($user);

});

$app->run();

 ?>