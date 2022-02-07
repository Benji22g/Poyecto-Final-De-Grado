<?php
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
			<label>Usuário</label>
			<input type="text" name="usuario">
		</div>
		<div class="input-group">
			<label>E-Mail</label>
			<input type="email" name="email">
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
		if (isset($_POST['usuario']))
		{
			$usuario = addslashes($_POST['usuario']);
			$email = addslashes($_POST['email']);
			$senha = addslashes($_POST['senha']);
			$senhaConf = addslashes($_POST['senhaConf']);
			//verificar se está tudo preenchido
			if(!empty($usuario) && !empty($email) && !empty($senha) && !empty($senhaConf))
			{
				$u->conectar("myitems","localhost","root","");
				if($u->msgError == "")//esta tudo ok!
				{
					if($senha == $senhaConf)
					{
						if($u->cadastrar($usuario, $email, $senha)){
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