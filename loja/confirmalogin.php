<?php
	session_start();
	include 'conexao.php';
	$sql = "select * from usuario where email = '{$_POST['email']}'";
	$query = mysqli_query($mysql,$sql);
	$dados = mysqli_fetch_assoc($query);
	
	//'{$_POST['email']}'";

	//verificar se usuario existe antes do teste
	if(isset($_POST['email']) and $_POST['email'] == $dados['email']){
		if(base64_encode($_POST['senha']) == $dados['senha']){
			$_SESSION['user_id'] = $dados['fk_id_pessoa'];
			$_SESSION['id_usuario'] = $dados['id_usuario'];
			$_SESSION['email'] = $dados['email'];
			$_SESSION['senha'] = $dados['senha'];
			$_SESSION['nivel'] = $dados['nivel'];
			header('Location:home.php');
		}
		if($_POST['email'] != $dados['email']){
			header('location:login.php?error=1');
		}
		if($_POST['senha'] != $dados['senha']){
			header('location:login.php?error=2');
		}
	}

?>
