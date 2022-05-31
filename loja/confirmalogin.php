<?php
	session_start();
	include 'conexao.php';
	$sql = "select * from usuario where email = '{$_POST['email']}'";
	$query = mysqli_query($mysql,$sql);
	$dados = mysqli_fetch_assoc($query);
	
	
	//verificar se usuario existe antes do teste
	#var_dump($dados);
	if(isset($_POST['email']) and $_POST['email'] == $dados['email']){
		if(base64_encode($_POST['senha']) == $dados['senha']){
			//o cara logou
			$_SESSION['id_usuario'] = $dados['id_usuario'];
			$_SESSION['email'] = $dados['email'];
			$_SESSION['senha'] = $dados['senha'];
			$_SESSION['nivel'] = $dados['nivel'];
			$_SESSION['user_id'] = $dados['fk_id_pessoa'];
			header('Location: home.php');
		}
		if(isset($_POST['email']) and $_POST['email'] != $dados['email']){
		echo "Email incorreto!";
		}
		if(isset($_POST['senha']) and $_POST['senha'] != $dados['senha']){
		echo "Senha incorreta";
		}
	}
?>