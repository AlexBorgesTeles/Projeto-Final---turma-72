<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'bancoloja';

    $mysql = mysqli_connect($servidor,$usuario,$senha,$banco);

    $consulta = "INSERT INTO entrega (cep, estado, cidade, bairro, endereco, numero, complemento, salvar como) VALUES ('{$_POST['cep']}', '{$_POST['estado']}', '{$_POST['cidade']}', '{$_POST['bairro']}', '{$_POST['endereco']}', '{$_POST['numero']}'), '{$_POST['complemento']}', '{$_POST['salvar como']}' )";

    $incluir = mysqli_query($mysql, $consulta);
    $novo_id = mysqli_insert_id($mysql);
    if($incluir){
        echo "<html><h5 style='text-align:center'>Dados inseridos com sucesso!</h5></html>";
    }
?>