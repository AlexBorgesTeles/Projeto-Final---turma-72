<?php
    

    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'bancoloja';

    $connection = mysqli_connect($servidor,$usuario,$senha,$banco);
    $sql="insert into pessoa(nome, email, cpf, endereco, telefone, senha) VALUES ('{$_POST['nome']}','{$_POST['email']}','{$_POST['cpf']}','{$_POST['endereco']}','{$_POST['telefone']}','{$_POST['senha']}')";
 

    $insert = mysqli_query($connection , $sql);

    if($insert){
        echo "<h2>Cadastro Realizado</h2>";
    }

    
#echo $sql;

#id de identificador
#CRUD
#Create
#Read
#Update
#Delete
?>