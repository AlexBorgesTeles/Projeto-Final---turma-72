<?php
include "../modelos/conexao.php";
    $sql="insert into pessoa(nome, cpf, rg, endereco, idade, telefone) VALUES ('{$_POST['nome']}','{$_POST['cpf']}','{$_POST['rg']}','{$_POST['endereco']}','{$_POST['idade']}','{$_POST['telefone']}')";
 

    $insert = mysqli_query($mysql , $sql);

    if($insert){
        header("Location: home.php");
    }

    
#echo $sql;

#id de identificador
#CRUD
#Create
#Read
#Update
#Delete
?>
