<?php
	include 'conexao.php';
	$sql = "select * from usuario where email = {$_POST['email']}";
	$query = mysqli_query($mysql,$sql);
	$dados = mysqli_fetch_assoc($query);
	#var_dump($dados);
	if(isset($_POST['email']) and $_POST['email'] == $dados['email']){
		if($_POST['senha'] == $dados['senha']){
			echo "Login efetuado!";
		}
	}
	if(isset($_POST['email']) and $_POST['email'] != $dados['email']){
		echo "Email incorreto!";
	}
	if(isset($_POST['senha']) and $_POST['senha'] != $dados['senha']){
		echo "Senha incorreta";
	}
?>