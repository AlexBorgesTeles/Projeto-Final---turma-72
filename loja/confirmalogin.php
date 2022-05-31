<?php
	session_start();
	include 'conexao.php';
	$sql = "select * from usuario where email = '{$_POST['email']}'";
	$query = mysqli_query($mysql,$sql);
	$dados = mysqli_fetch_assoc($query);
	$SESSION['id_usuario'] = $dados['id_usario'];
	$SESSION['email'] = $dados['email'];
	$SESSION['senha'] = $dados['senha'];
	$SESSION['nivel'] = $dados['nivel'];
	
	//verificar se usuario existe antes do teste
	#var_dump($dados);
	if(isset($_POST['email']) and $_POST['email'] == $dados['email']){
		if(base64_encode($_POST['senha']) == $dados['senha']){
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