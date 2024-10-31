<?php 

	//<?php 

			session_start();

			$_SESSION['nome1'] = $_POST['nome1'];
			$_SESSION['idade1'] = $_POST['idade1'];
			$_SESSION['peso1'] = $_POST['peso1'];
			$_SESSION['altura1'] = $_POST['altura1'];

			$per1_nome = $_SESSION['nome1'];
			$per1_idade = $_SESSION['idade1'];
			$per1_peso = $_SESSION['peso1'];
			$per1_altura = $_SESSION['altura1'];

			$per_nome = $_SESSION['nome'];
			$per_idade = $_SESSION['idade'];
			$per_peso = $_SESSION['peso'];
			$per_altura = $_SESSION['altura'];

			if ($per_idade < $per1_idade) {
				echo $per1_nome. " é mais velho(a) do que ". $per_nome. ".</br></br>";
			} else {
				echo $per_nome. " é mais velho(a) do que ". $per1_nome. ".</br></br>";
			}

			if ($per_altura < $per1_altura) {
				echo $per1_nome. " é mais alto(a) do que ". $per_nome. ".</br></br>";
			} else {
				echo $per_nome. " é mais alto(a) do que ". $per1_nome. ".</br></br>";
			}

			if ($per_idade < $per1_idade) {
				echo $per1_nome. " é mais pesado(a) do que ". $per_nome. ".</br></br>";
			} else {
				echo $per_nome. " é mais pesado do(a) que ". $per1_nome. ".</br></br>";
			}



			

				/*$_SESSION['arr_nome'] = $arr_nome[];
				$_SESSION['arr_idade'] = $arr_nome[];
				$_SESSION['arr_peso'] = $arr_nome[];
				$_SESSION['arr_altura'] = $arr_nome[];*/


		if ($_SESSION['cont'] == 0){
			$_SESSION['cont'] += 1;
			$_SESSION['nome'] = $_POST['nome'];
			$_SESSION['idade'] = $_POST['idade'];
			$_SESSION['peso'] = $_POST['peso'];
			$_SESSION['altura'] = $_POST['altura'];
			header("location:formulário2.php");
		}else{
			$_SESSION['cont'] = 0;
		}
		
		
		




	


 ?>