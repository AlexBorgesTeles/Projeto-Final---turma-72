<?php
    

    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'yasminbd';

    $connection = mysqli_connect($servidor,$usuario,$senha,$banco);
    $sql="insert into registro(nome, email, cpf, endereco, telefone, senha) VALUES ('{$_POST['nome']}','{$_POST['email']}','{$_POST['cpf']}','{$_POST['ender']}','{$_POST['tel']}','{$_POST['senha']}')";
 

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
