<?php
  	require 'database.php';
	require_once 'usuarios.php';
	$u = new Usuario;
?>
<!DOCTYPE html>
<html>
<head>
	<title>SmartDocs</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/component.css"/>
</head>
<body>
	<div class="header">
		<div class="SDTitle" onClick="window.location.reload();"><img src="MyItems.png" class="imglogo" style="height: 70px; width: 70px;">
		<div style="padding-top: 10px"><h1 class="mylogo">MyItems</h1></div></div>
	</div>
	
	<form method="post" action="register.php">

		<div class="input-group">
			<label>Nick</label>
			<input type="text" name="nick">
		</div>

		<div class="input-group">
			<label>E-Mail</label>
			<input type="email" name="email">
		</div>

		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name">
		</div>

		<div class="input-group">
			<label>Last Name</label>
			<input type="text" name="lastname">
		</div>

		<div class="input-group">
			<label>Senha</label>
			<input type="password" name="senha">
		</div>

		<div class="input-group">
			<label>Confirmar senha</label>
			<input type="password" name="senhaConf">
		</div>
		<center>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Registrar</button>
		</div>
		<p>
			Já é membro? <a href="login.php">Logar</a>
		</p>
		</center>
	</form>
	<?php
		//verificar se a pessoa clicou no botão
		if (isset($_POST['nick']))
		{
			$nick = addslashes($_POST['nick']);
			$email = addslashes($_POST['email']);
			$name = addslashes($_POST['name']);
			$lastname = addslashes($_POST['lastname']);
			$senha = addslashes($_POST['senha']);
			$senhaConf = addslashes($_POST['senhaConf']);
			//verificar se está tudo preenchido
			if(!empty($nick) && !empty($email) && !empty($name) && !empty($senha) && !empty($senhaConf) && !empty($senhaConf))
			{
				$u->conectar("myitems","localhost","root","");
				if($u->msgError == "")//esta tudo ok!
				{
					if($senha == $senhaConf)
					{
						if($u->cadastrar($nick, $email, $senha, $name, $lastname)){
							echo "Cadastrado com sucesso!";
						}else
						{
							echo "Email ou usuário já cadastrado!";
						}
					}else
					{
						echo "Digite senhas iguais!";
					}
				}else
				{
					echo "Error: ".$u->msgError;
				}
			}else
			{
				echo "Preencha todos os campos!";
			}
		}
	?>
</body>
</html>