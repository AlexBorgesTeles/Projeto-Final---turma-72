<?php
include 'conexao.php';
$sqlpessoa="INSERT INTO `pessoa`(`id_pessoa`, `nome`, `cpf`, `rg`, `endereco`, `idade`, `telefone`) VALUES ('{$_POST['id_pessoa']} ','{$_POST['nome']}','{$_POST['cpf']}','{$_POST['rg']}','{$_POST['endereco']}','{$_POST['idade']}','{$_POST['telefone']}')";
$sqlusuario="INSERT INTO `usuario`(`id_usuario`, `email`, `senha`, `nivel`) VALUES ('{$_POST['id_usuario']}','{$_POST['email']}','{$_POST['senha']}','2";	
$query=mysqli_query($mysql,$sqlpessoa,$sqlusuario);
$dados=mysqli_fecth_assoc($query);
#var_dump($dados);





  
  
?>

