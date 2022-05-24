<?php
<<<<<<< Updated upstream
	include 'conexao.php';
	
	#var_dump($dados);
	//testar as variaveis
	if ($_POST['nome'] != '' and $_POST['cpf'] != '' and $_POST['rg'] and $_POST['endereco'] and $_POST['idade'] and $_POST['telefone'] and $_POST['email'] and $_POST['senha']){
			//insere a pessoa
			$sqlpessoa="insert into pessoa(nome, cpf, rg, endereco, idade, telefone) VALUES ('{$_POST['nome']}','{$_POST['cpf']}','{$_POST['rg']}','{$_POST['ender']}','{$_POST['idade']}','{$_POST['tel']}')";
			//pega o id da pessoa e insere o usuario
			
			//corrigir o insert
			$sqlusuario="insert into usuario(email,id_pessoa,senha,nivel) VALUES ('{$_POST['email']}','{$_POST['senha']}',2)";	
			$query=mysqli_query($mysql,$sqlpessoa,$sqlusuario);
			
			//manda o cara pra home.php
	}else{
		//manda o cara de volta pro cadastro
	}
=======
include 'conexao.php';
$sqlpessoa="INSERT INTO `pessoa`(`id_pessoa`, `nome`, `cpf`, `rg`, `endereco`, `idade`, `telefone`) VALUES ('{$_POST['id_pessoa']} ','{$_POST['nome']}','{$_POST['cpf']}','{$_POST['rg']}','{$_POST['endereco']}','{$_POST['idade']','{$_POST['telefone']}')";
$sqlusuario="INSERT INTO `usuario`(`id_usuario`, `email`, `senha`, `nivel`) VALUES ('{$_POST['id_usuario']}','{$_POST['email']}','{$_POST['senha']}','2";	
$query=mysqli_query($mysql,$sqlpessoa,$sqlusuario);


$dados=mysqli_fecth_assoc($query);
#var_dump($dados);
if ($_POST['nome'] and $_POST['cpf'] and $_POST['rg'] and $_POST['endereco'] and $_POST['idade'] and $_POST['telefone'] and $_POST['email'] and $_POST['senha']){
echo "Cadastro realizado com sucesso";
}
>>>>>>> Stashed changes
  
  
?>

