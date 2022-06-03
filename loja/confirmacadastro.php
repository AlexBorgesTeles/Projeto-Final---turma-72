<?php
	//tirar o nivel do cadastro
	include 'conexao.php';
	include 'cabecalho.php';
	$sql = "SELECT `email` FROM `usuario`";
	$query = mysqli_query($mysql,$sql);
	$dados = mysqli_fetch_assoc($query);

	#var_dump($dados);
	//SE O POST NÃO VIER VAZIO
	if(isset($dados['email']) and $_POST['email01'] == $dados['email'] ){
			Header('location:cadastro.php?falta=9');
	}else{
			if(isset($_POST['nome']) and $_POST['nome'] == ''){
				Header('location:cadastro.php?falta=1');
			}
			if(isset($_POST['cpf01']) and $_POST['cpf01'] == ''){
				Header('location:cadastro.php?falta=2');
			}
			if(isset($_POST['rg01']) and $_POST['rg01'] == ''){
				Header('location:cadastro.php?falta=3');
			}
			if(isset($_POST['endereco01']) and $_POST['endereco01'] == ''){
				Header('location:cadastro.php?falta=4');
			}
			if(isset($_POST['idade01']) and $_POST['idade01'] == ''){
				Header('location:cadastro.php?falta=5');
			}
			if(isset($_POST['telefone01']) and $_POST['telefone01'] == ''){
				Header('location:cadastro.php?falta=6');
			}
			if(isset($_POST['email01']) and $_POST['email01'] == ''){
				Header('location:cadastro.php?falta=7');
			}
			if(isset($_POST['senha01']) and $_POST['senha01'] == ''){
				Header('location:cadastro.php?falta=8');
			}
			if ($_POST['nome01'] != '' and $_POST['cpf01'] != '' and $_POST['rg01'] != '' and $_POST['endereco01'] != '' and $_POST['idade01'] != '' and $_POST['telefone01'] != '' and $_POST['email01'] != '' and $_POST['senha01'] != ''){

				$sqlpessoa="INSERT INTO `pessoa`(`nome`, `cpf`, `rg`, `endereco`, `idade`, `telefone`) VALUES ('{$_POST['nome01']}','{$_POST['cpf01']}','{$_POST['rg01']}','{$_POST['endereco01']}','{$_POST['idade01']}','{$_POST['telefone01']}')";
				$query=mysqli_query($mysql,$sqlpessoa);
				$last_id = mysqli_insert_id($mysql);

				$senha = base64_encode($_POST['senha01']);
				$sqlusuario = "INSERT INTO `usuario`(`fk_id_pessoa`, `email`, `senha`, `nivel`) VALUES ('{$last_id}','{$_POST['email01']}','{$senha}','{$_POST['nivel02']}')";
				$query02 = mysqli_query($mysql,$sqlusuario);
				header('Location:login.php?error=3');
			}
		}
	include 'footer.php';
  
  
?>

