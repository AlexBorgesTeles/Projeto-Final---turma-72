<?php
	//tirar o nivel do cadastro
	include 'conexao.php';
	#var_dump($dados);
	if ($_POST['nome'] != '' and $_POST['cpf'] != '' and $_POST['rg'] != '' and $_POST['endereco'] != '' and $_POST['idade'] != '' and $_POST['telefone'] != '' and $_POST['email'] != '' and $_POST['senha'] != ''){
	
	$sqlpessoa="INSERT INTO `pessoa`(`nome`, `cpf`, `rg`, `endereco`, `idade`, `telefone`) VALUES ('{$_POST['nome']}','{$_POST['cpf']}','{$_POST['rg']}','{$_POST['endereco']}','{$_POST['idade']}','{$_POST['telefone']}')";
	$query=mysqli_query($mysql,$sqlpessoa);
	$last_id = mysqli_insert_id($mysql);
	echo $last_id;
	//teste o sqlpessoa no BD
	//pegue o id 
	//idpessoa
	$sqlusuario="INSERT INTO `usuario`(`fk_id_pessoa`, `email`, `senha`) VALUES ('{$last_id}','{$_POST['email']}','{$_POST['senha']}')";
	$last_id = mysqli_insert_id($mysql);
        echo $last_id;
#header('Location:home.php');
if ($_POST['nome'] and $_POST['cpf'] and $_POST['rg'] and $_POST['endereco'] and $_POST['idade'] and $_POST['telefone'] and $_POST['email'] and $_POST['senha']){
echo "Cadastro realizado com sucesso";
}else{
#header('Location:cadastro.php');
}


  
  
?>

