<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport content="width=device-width, initial-scale=1">
	<title>Entrar</title>
</head>
<body>
	
<?php

	session_start();


	if ((array_key_exists("senha", $_SESSION)) && !(is_null($_SESSION['senha']))){
		echo "Usuário ".$_SESSION['usuario'].' logado!<br><br><a href="sair.php">Sair</a>';
		session_destroy();

	}else{

		echo '<form action="gerenciar.php" method="post">
		Login: <br>
		<input type="text" name="login"><br>
		Senha: <br>
		<input type="number" name="senha"><br>
		<input type="submit" name="enviar">
		<br><br>
		<p>admin && 1234</p><br>
		<p>visit && 12345</p><br>
		<p>colab && 123456</p><br>
	';

	}


		
 ?>

 </form>
</body>
</html>