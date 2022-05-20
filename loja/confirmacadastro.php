<?php
include 'conexao.php';
$sql="insert into pessoa(nome, cpf, rg, endereco, idade, telefone) VALUES ('{$_POST['nome']}','{$_POST['cpf']}','{$_POST['rg']}','{$_POST['ender']}','{$_POST['idade']}','{$_POST['tel']}')";
$sql="insert into usuario(email,senha,nivel) VALUES ('{$_POST['email']}','{$_POST['senha']}','{$_POST['nivel']}')";	
   
 

    $insert = mysqli_query($mysql , $sql);

    if($insert){
        header("Location: home.php");
    }

 
?>
