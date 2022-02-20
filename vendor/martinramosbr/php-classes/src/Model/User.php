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

	public static function listAll()
	{

		$sql = new Sql();

		return $sql->select("SELECT * FROM usuario ORDER BY idusuario");

	}

	public function save()
	{

		$sql = new Sql();
		/*
		pdes_usuario VARCHAR(100),
		pdes_senha VARCHAR(256)
		*/
		$results = $sql->select("CALL sp_users_save(:des_usuario, :des_senha)", array(
			":des_usuario"=>$this->getdes_usuario(),
			":des_senha"=>$this->getdes_senha()
		));

		$this->setData($results[0]);
	}

	public static function listAllorgaos()
	{

		$sql = new Sql();

		return $sql->select("SELECT * FROM contratos ORDER BY idcontratos");

	}

		public function saveOrgao()
	{

		$sql = new Sql();
		/*
		pdes_contrato VARCHAR(100),
		pdes_datavencimento date,
		pdes_valorcontrato decimal(30,2)
		*/
		$results = $sql->select("CALL sp_orgao_save(:des_contrato, :des_datavencimento, :des_valorcontrato)", array(
			":des_contrato"=>$this->getdes_contrato(),
			":des_datavencimento"=>$this->getdes_datavencimento(),
			":des_valorcontrato"=>$this->getdes_valorcontrato()
		));

		$this->setData($results);
	}

}

 ?>
