<?php
include 'conexao.php';
#var_dump($dados);
if ($_POST['nome'] != '' and $_POST['cpf'] != '' and $_POST['rg'] != '' and $_POST['endereco'] != '' and $_POST['idade'] != '' and $_POST['telefone'] != '' and $_POST['email'] != '' and $_POST['senha'] != ''){
	
	$sqlpessoa="INSERT INTO `pessoa`(`nome`, `cpf`, `rg`, `endereco`, `idade`, `telefone`) VALUES ('{$_POST['nome']}','{$_POST['cpf']}','{$_POST['rg']}','{$_POST['endereco']}','{$_POST['idade']}','{$_POST['telefone']}')";
	echo $sqlpessoa;
	//teste o sqlpessoa no BD
	//pegue o id 
	//idpessoa
	$sqlusuario="INSERT INTO `usuario`(`fk_id_pessoa`, `email`, `senha`, `nivel`) VALUES ('{$idpessoa}','{$_POST['email']}','{$_POST['senha']}','2";	
	$query=mysqli_query($mysql,$sqlpessoa,$sqlusuario);
	$dados=mysqli_fecth_assoc($query);
	echo "Cadastro realizado com sucesso";
#header('Location:home.php');
}else{
#header('Location:cadastro.php');
}


  
  
?>

