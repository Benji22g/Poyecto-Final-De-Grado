<?php
  require 'database.php';

class Usuario
{
	private $pdo;
	public $msgError = "";
	public function conectar($nome, $host, $usuario, $senha){
		global $pdo;
		try{
			$pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
		}catch(PDOException $e){
			$msgError = $e->getMessage();
		}
	}
	public function cadastrar($usuario, $email, $senha){
		global $pdo;
		//verificar se já existe email cadastrado!
		$sql = $pdo->prepare("SELECT id FROM usuarios WHERE usuario = :u");
		$sql->bindValue(":u",$usuario);
		$sql->execute();
		if($sql->rowCount() > 0){
			return false; //Já está cadastrada!
		}else{
			$sql = $pdo->prepare("SELECT id FROM usuarios WHERE email = :e");
			$sql->bindValue(":e",$email);
			$sql->execute();
			if($sql->rowCount() > 0){
				return false; //Já está cadastrada!
			}else{
				$sql = $pdo->prepare("INSERT INTO usuarios (usuario, email, senha) VALUES (:u, :e, :s)");
				$sql->bindValue(":u",$usuario);
				$sql->bindValue(":e",$email);
				$sql->bindValue(":s",md5($senha));
				$sql->execute();
				return true; //cadastrado com sucesso!
			}
		}
		//cadastrando no banco de dados...
	}
	
	public function logar($nick,$senha){
		global $pdo;
		$sql = $pdo->prepare("SELECT id, nick, admin, name, email, lastname FROM usuarios WHERE nick = :n AND senha = :s");
		$sql->bindValue(":n",$nick);
		$sql->bindValue(":s",md5($senha));
		$sql->execute();
		if($sql->rowCount() > 0){
			//autenticada
			$dado = $sql->fetch();
			session_start();
			$_SESSION['id'] = $dado['id'];
			$_SESSION['usuario'] = $dado['nick'];
			$_SESSION['admin'] = $dado['admin'];
			$_SESSION['name'] = $dado['name'];
			$_SESSION['lastname'] = $dado['lastname'];
			$_SESSION['email'] = $dado['email'];
			return true;
		}else{
			return false;
		}
	}
}

?>