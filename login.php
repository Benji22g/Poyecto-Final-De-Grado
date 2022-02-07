<?php
	require_once 'usuarios.php';
	$u = new Usuario;
?>
<!DOCTYPE html>
<html>
<head>
	<title>BookNatur</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="SmartDocs.png">
</head>
<body>
	<div class="header">
		<div class="SDTitle" onClick="window.location.reload();"><img src="MyItems.png" class="imglogo" style="height: 70px; width: 70px;">
		<div style="padding-top: 10px"><h1 class="mylogo">BookNatur</h1></div></div>
	</div>
	<form method="post" action="login.php">
		<div class="input-group">
			<h3>Usuario</h3>
			<input type="text" name="usuario" >
		</div>
		<div class="input-group">
			<h3>Contraseña</h3>
			<input type="password" name="senha">
		</div>
		<center>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user"><span>Inicio</span></button>
		</div>
		<p>Nuevo miembro? <a href="register.php">Registrese</a></p>
		</center>
	</form>
	<?php
		if(isset($_POST['usuario'])){
			$usuario = addslashes($_POST['usuario']);
			$senha = addslashes($_POST['senha']);
			if(!empty($usuario) && !empty($senha)){
				$u->conectar("myitems","localhost","root","");
				if($u->msgError == ""){
					if($u->logar($usuario,$senha)){
						header("location: index.php");
					}
					else{
						echo "Usuario o contraseñas incorrectos!";
					}
				}
				else{
					echo "Error: ".$u->msgError;
				}
			}
			else{
				echo "rellena todos los campos!";
			}
		}
	?>

</body>
</html>