<?php 

namespace Martinbr\Model;


use \Martinbr\DB\Sql;
use \Martinbr\Model;

class User extends Model {

	const SESSION = "User";

	public static function login($login, $password) 
	{

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM usuario WHERE des_usuario = :LOGIN", array(
				"LOGIN"=>$login
		));

		if (count($results) === 0)
		{
			throw new \Exception("Usuário inexistente ou senha inválida.");	
		}

		$data = $results[0];

		if ($password == $data["des_senha"]) {

			$user = new User();

			$user->setData($data);

			$_SESSION[User::SESSION] = $user->getValues();

			//$user->setidusuario($data["idusuario"]);

			return $user;
		
		} else {

			throw new \Exception("Usuário inexistente ou senha inválida."); 
		}

	}

	public static function verifyLogin($idusuario = true)
	{

		if (
			!isset($_SESSION[User::SESSION])
			||
			!$_SESSION[User::SESSION]
			||
			!(int)$_SESSION[User::SESSION]["idusuario"] > 0
		){
			header("Location: /sistema/login");
			exit;
		}

	}

	public static function logout()
	{

		$_SESSION[User::SESSION] = NULL;

	}

}

 ?>
