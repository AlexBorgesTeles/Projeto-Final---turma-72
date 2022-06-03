<?php
	//tirar o nivel do cadastro
	include 'conexao.php';
	include 'cabecalho.php';
	$sql = "SELECT `email` FROM `usuario`";
	$query = mysqli_query($mysql,$sql);
	$dados = mysqli_fetch_assoc($query);

	#var_dump($dados);
	//SE O POST NÃO VIER VAZIO
	if(isset($_POST) and $_POST['email01'] == $dados['email'] ){
			Header('location:cadastro.php?falta=9');
	}else{
			if(isset($_POST['nome']) and $_POST['nome'] == ''){
				Header('location:cadastro.php?falta=1&nome='.'$_POST['nome']'.'&senha='.$_POST['senha01'].'&email='.$_POST['email01'].'&telefone='.$_POST['telefone01'].'&idade='.$_POST['idade01'].'&endereco='.$_POST['endereco01'].'&rg='.$_POST['rg01'].'&cpf='.$_POST['cpf01'].'');
			}
			if(isset($_POST['cpf01']) and $_POST['cpf01'] == ''){
				Header('location:cadastro.php?falta=2&'.$_POST['senha01'].'&'.$_POST['email01'].'&'.$_POST['telefone01'].'&'.$_POST['idade01'].'&'.$_POST['endereco01'].'&'.$_POST['rg01'].'&'.$_POST['cpf01'].'&'.$_POST['nome01'].'');
			}
			if(isset($_POST['rg01']) and $_POST['rg01'] == ''){
				Header('location:cadastro.php?falta=3&'.$_POST['senha01'].'&'.$_POST['email01'].'&'.$_POST['telefone01'].'&'.$_POST['idade01'].'&'.$_POST['endereco01'].'&'.$_POST['rg01'].'&'.$_POST['cpf01'].'&'.$_POST['nome01'].'');
			}
			if(isset($_POST['endereco01']) and $_POST['endereco01'] == ''){
				Header('location:cadastro.php?falta=4&'.$_POST['senha01'].'&'.$_POST['email01'].'&'.$_POST['telefone01'].'&'.$_POST['idade01'].'&'.$_POST['endereco01'].'&'.$_POST['rg01'].'&'.$_POST['cpf01'].'&'.$_POST['nome01'].'');
			}
			if(isset($_POST['idade01']) and $_POST['idade01'] == ''){
				Header('location:cadastro.php?falta=5&'.$_POST['senha01'].'&'.$_POST['email01'].'&'.$_POST['telefone01'].'&'.$_POST['idade01'].'&'.$_POST['endereco01'].'&'.$_POST['rg01'].'&'.$_POST['cpf01'].'&'.$_POST['nome01'].'');
			}
			if(isset($_POST['telefone01']) and $_POST['telefone01'] == ''){
				Header('location:cadastro.php?falta=6&'.$_POST['senha01'].'&'.$_POST['email01'].'&'.$_POST['telefone01'].'&'.$_POST['idade01'].'&'.$_POST['endereco01'].'&'.$_POST['rg01'].'&'.$_POST['cpf01'].'&'.$_POST['nome01'].'');
			}
			if(isset($_POST['email01']) and $_POST['email01'] == ''){
				Header('location:cadastro.php?falta=7&'.$_POST['senha01'].'&'.$_POST['email01'].'&'.$_POST['telefone01'].'&'.$_POST['idade01'].'&'.$_POST['endereco01'].'&'.$_POST['rg01'].'&'.$_POST['cpf01'].'&'.$_POST['nome01'].'');
			}
			if(isset($_POST['senha01']) and $_POST['senha01'] == ''){
				Header('location:cadastro.php?falta=8&'.$_POST['senha01'].'&'.$_POST['email01'].'&'.$_POST['telefone01'].'&'.$_POST['idade01'].'&'.$_POST['endereco01'].'&'.$_POST['rg01'].'&'.$_POST['cpf01'].'&'.$_POST['nome01'].'');
			}
			if ($_POST['nome01'] != '' and $_POST['cpf01'] != '' and $_POST['rg01'] != '' and $_POST['endereco01'] != '' and $_POST['idade01'] != '' and $_POST['telefone01'] != '' and $_POST['email01'] != '' and $_POST['senha01'] != ''){

				$sqlpessoa="INSERT INTO `pessoa`(`nome`, `cpf`, `rg`, `endereco`, `idade`, `telefone`) VALUES ('{$_POST['nome01']}','{$_POST['cpf01']}','{$_POST['rg01']}','{$_POST['endereco01']}','{$_POST['idade01']}','{$_POST['telefone01']}')";
				$query=mysqli_query($mysql,$sqlpessoa);
				$last_id = mysqli_insert_id($mysql);

				$senha = base64_encode($_POST['senha']);
				$sqlusuario = "INSERT INTO `usuario`(`fk_id_pessoa`, `email`, `senha`, `nivel`) VALUES ('{$last_id}','{$_POST['email01']}','{$senha}'.'{$_POST['nivel']}')";
				$query = mysqli_query($mysql,$sqlusuario);
				header('Location:login.php?error=3');
			}
		}
	include 'footer.php';
  
  
?>

