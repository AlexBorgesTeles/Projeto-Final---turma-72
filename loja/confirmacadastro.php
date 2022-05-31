<?php
	//tirar o nivel do cadastro
	include 'conexao.php';
	include 'cabecalho.php';
	#var_dump($dados);
	if ($_POST['nome'] != '' and $_POST['cpf'] != '' and $_POST['rg'] != '' and $_POST['endereco'] != '' and $_POST['idade'] != '' and $_POST['telefone'] != '' and $_POST['email'] != '' and $_POST['senha'] != ''){
		#echo "Entrei";
		$sqlpessoa="INSERT INTO `pessoa`(`nome`, `cpf`, `rg`, `endereco`, `idade`, `telefone`) VALUES ('{$_POST['nome']}','{$_POST['cpf']}','{$_POST['rg']}','{$_POST['endereco']}','{$_POST['idade']}','{$_POST['telefone']}')";
		$query=mysqli_query($mysql,$sqlpessoa);
		$last_id = mysqli_insert_id($mysql);

		$senha = base64_encode($_POST['senha']);
		$sqlusuario = "INSERT INTO `usuario`(`fk_id_pessoa`, `email`, `senha`) VALUES ('{$last_id}','{$_POST['email']}','{$senha}')";
		$query = mysqli_query($mysql,$sqlusuario);
		header('Location:login.php');
	}else{
		echo "<div class= 'container'>
				<div class= 'row'>
					<div class='col'>
						<span class ='text-align: center'>
							<br><br><center>
							<img src='../imagens/atenção.jpg' width='80' height='80' id='Slide1' alt='Slide1'/>
							<h4>Perdão, mas algumas das suas informações estão incorretas. Por favor, retorne e as corrigem!</h4>
							</center><br><br>
						</span>
					</div>
				</div>
				<div class= 'row'>
					<div class='col-md-auto'>
					</div>
					<div class='col-5'>
						<br>
						<button type='button' class='btn btn-dark'>
							<a class='text-white' href='cadastro.php'> Retornar</a>
						</button>
					</div>
					<div class='col-5'>
						<br>
						<button type='button' class='btn btn-dark'>
							<a class='text-white' href='home.php'> Página Inicial</a>
						</button>
					</div>
					<div class='col-md-auto'>
					</div>
				</div>
			</div>";
	}
	include 'footer.php';
  
  
?>

