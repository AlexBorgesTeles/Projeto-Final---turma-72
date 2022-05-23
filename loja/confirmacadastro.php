<?php
include 'conexao.php';
$sqlpessoa="insert into pessoa(nome, cpf, rg, endereco, idade, telefone) VALUES ('{$_POST['nome']}','{$_POST['cpf']}','{$_POST['rg']}','{$_POST['ender']}','{$_POST['idade']}','{$_POST['tel']}')";
$sqlusuario="insert into usuario(email,senha,nivel) VALUES ('{$_POST['email']}','{$_POST['senha']}','{$_POST['nivel']}')";	
$query=mysqli_query($mysql,$sqlpessoa,$sqlusuario);
$dados=mysqli_fecth_assoc($query);
#var_dump($dados);
if(isset($_POST['nome']) and ($_POST['cpf']) and ($_POST['rg']) and ($_POST['endereco']) and ($_POST['idade']) and ($_POST['telefone']) and ($_POST['email']) and ($_POST['senha'])
  

  
    if($insert){
    
        header("Location: home.php");
    }
    

?>
insere a pessoa 
insere o id da pessoa
insere o uduario
