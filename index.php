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
	$users = User::listAll();

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
//list users in data base
$app->get("/sistema/users", function() {

	User::verifyLogin();

	$sql = new Martinbr\DB\Sql();

	$usuario = $sql->select("SELECT * FROM usuario");

	$users = User::listAll();

	$page = new PageSistema();

	$page->setTpl("users", array(
		
		"users"=>$users
	));

});

$app->get("/sistema/alterar-users", function() {

	User::verifyLogin();

	$alterarusers = User::listAll();

	$page = new PageSistema();

	$page->setTpl("alterar-users", array(

		"alterar-users"=>$alterarusers
	));

});

//direct-insert-new-user
$app->get("/sistema/novo-usuario", function() {

	User::verifyLogin();

	$page = new PageSistema();

	$page->setTpl("new-users");

});



$app->get("/sistema/novo-usuario", function() {

	User::verifyLogin();
});

//delete-user
$app->get("/sistema/users/:idusuario/delete", function($idusuario) {

	User::verifyLogin();

	$user = new User;

	$user->get((int)$idusuario);

	$user->delete();

	header("Location: /sistema/users");
	exit;

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

//select-user-to-update
$app->get("/sistema/users/:idusuario", function($idusuario) {

	User::verifyLogin();

	$user = new User();

	$user->get((int)$idusuario);

	$page = new PageSistema();

	$page->setTpl("new-users-update", array(

		"user"=>$user->getValues()

	));

});

//save-update-user
$app->post("/sistema/users/:idusuario", function($idusuario) {

	User::verifyLogin();

	$user = new User();

	$user->get((int)$iduser);

	$user->setData($_POST);

	$user->update();

	header("Location: /sistema/users");
	exit;

});

$app->get("/sistema/orgaos", function() {

	User::verifyLogin();

	$orgao = User::listAllorgaos();

	$page = new PageSistema();

	$page->setTpl("orgao", array(

		"orgao"=>$orgao

	));
});

$app->get("/sistema/in-queue", function() {

	User::verifyLogin();

	$queue = User::listAllqueue();

	$page = new PageSistema();

	$page->setTpl("queue", array(

		"queue"=>$queue

	));
});

$app->get("/sistema/resolved", function() {

	User::verifyLogin();

	$ticketatt = User::listAllticketatt();

	$page = new PageSistema();

	$page->setTpl("ticket-atendidos", array(

		"ticket-atendidos"=>$ticketatt

	));
});

$app->get("/sistema/novo-orgao", function() {

	User::verifyLogin();

	$page = new PageSistema();

	$page->setTpl("new-orgaos");

});

$app->get("/sistema/filtrar-tickets-atendido", function() {

	User::verifyLogin();

	$page = new PageSistema();

	$page->setTpl("filtrar-tickets-atendido");

});

$app->get("/sistema/filtrar-tickets-fila", function() {

	User::verifyLogin();

	$page = new PageSistema();

	$page->setTpl("filtrar-tickets-fila");

});

$app->get("/sistema/filtro-users", function() {

	User::verifyLogin();

	$page = new PageSistema();

	$page->setTpl("filtro-users");

});


$app->post("/sistema/novo-orgao", function() {

	User::verifyLogin();

	//var_dump($_POST);
	$orgao = new User();

	$orgao->setData($_POST);

	$orgao->saveOrgao();

	header("Location: /sistema/orgaos");
	exit;

	//var_dump($user);

});
//ticket 
$app->post("/sistema", function() {

	User::verifyLogin();

	//var_dump($_POST);
	$ticket = new User();

	$ticket->setData($_POST);

	$ticket->saveTicket();

	header("Location: /sistema/in-queue");
	exit;

	//var_dump($user);

});

$app->run();

 ?>