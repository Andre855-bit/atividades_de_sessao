<?php 

	//<?php 

			session_start();

			$_SESSION['nome'] = $_POST['nome'];
			$_SESSION['idade'] = $_POST['idade'];
			$_SESSION['peso'] = $_POST['peso'];
			$_SESSION['altura'] = $_POST['altura'];

			$arr_nome[] = $_SESSION['nome']; 
			$arr_idade[] = $_SESSION['idade'];
			$arr_peso[] = $_SESSION['peso'];
			$arr_altura[] = $_SESSION['altura'];

			if (condition) {

				session_destroy();
				session_start();

				$_SESSION['arr_nome'] = $arr_nome[];
				$_SESSION['arr_idade'] = $arr_nome[];
				$_SESSION['arr_peso'] = $arr_nome[];
				$_SESSION['arr_altura'] = $arr_nome[];

				header("location:formulário.php");
			} 




	//?>


 ?>