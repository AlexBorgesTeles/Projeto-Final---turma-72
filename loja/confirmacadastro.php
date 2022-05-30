<?php
	//tirar o nivel do cadastro
	include 'conexao.php';
	#var_dump($dados);
	if ($_POST['nome'] != '' and $_POST['cpf'] != '' and $_POST['rg'] != '' and $_POST['endereco'] != '' and $_POST['idade'] != '' and $_POST['telefone'] != '' and $_POST['email'] != '' and $_POST['senha'] != '')
		$sqlpessoa="INSERT INTO `pessoa`(`nome`, `cpf`, `rg`, `endereco`, `idade`, `telefone`) VALUES ('{$_POST['nome']}','{$_POST['cpf']}','{$_POST['rg']}','{$_POST['endereco']}','{$_POST['idade']}','{$_POST['telefone']}')";
		$query=mysqli_query($mysql,$sqlpessoa);
		$last_id = mysqli_insert_id($mysql);
		
		//teste o sqlpessoa no BD
		//pegue o id 
		//idpessoa
		$senha = base64_encode($_POST['senha']);
		$sqlusuario="INSERT INTO `usuario`(`fk_id_pessoa`, `email`, `senha`) VALUES ('{$last_id}','{$_POST['email']}','{$senha}')";

		$query=mysqli_query($mysql,$sqlusuario);
		
if ($_POST['nome'] and $_POST['cpf'] and $_POST['rg'] and $_POST['endereco'] and $_POST['idade'] and $_POST['telefone'] and $_POST['email'] and $_POST['senha']){

header('Location:login.php');
}else{
if (isset($_POST['nome']) and $_POST['cpf'] ){
 echo "incorreto ou Incompleto";
header('Location:cadastro.php');
}

  
  
?>

