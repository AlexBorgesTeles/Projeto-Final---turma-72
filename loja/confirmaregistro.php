<?php
  
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'yasminbd';

    $connection = mysqli_connect($servidor,$usuario,$senha,$banco);
    $sql="insert into registro(nome, email, senha) VALUES ('{$_POST['nome']}','{$_POST['email']}','{$_POST['senha']}')";
 

    $insert = mysqli_query($connection , $sql);

    if($insert){
        echo "<h2>Login Realizado</h2>";
    }

    
#echo $sql;

#id de identificador
#CRUD
#Create
#Read
#Update
#Delete
?>