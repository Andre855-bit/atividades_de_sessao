<?php 

	session_start();

	$_SESSION['cont'] = 0;

	
	$_SESSION['login'] = $_POST['login'];
	$login = $_SESSION['login'];
	$_SESSION['senha'] = $_POST['senha'];
	$senha = $_SESSION['senha'];

	if($login == "admin" && $senha == "1234"){

		$_SESSION['usuario'] = "administrador";

	} elseif ($login == "visit" && $senha == "12345") {

		$_SESSION['usuario'] = "Visitante";

	}elseif ($login == "colab" && $senha == "123456") {

		$_SESSION['usuario'] = "colaborador";
	}


	echo "Seja bem-vindo ".$_SESSION['usuario']."!";




	//header("location:sair.php")


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Trafego de dados</title>
 </head>
 <body>

 	<a href="sair.php">Sair</a>
 
 </body>
 </html>
