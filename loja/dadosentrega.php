<?php
    include "conexao.php";
    if ($_POST['cep'] != '' and $_POST['estado'] != '' and $_POST['cidade'] != '' and $_POST['bairro'] != '' and $_POST['endereco'] != '' and $_POST['numero'] != '' and $_POST['complemento'] != '' and $_POST['salvar como'] != ''){
        $consulta = "INSERT INTO entrega (cep, estado, cidade, bairro, endereco, numero, complemento, salvar como) VALUES ('{$_POST['cep']}', '{$_POST['estado']}', '{$_POST['cidade']}', '{$_POST['bairro']}', '{$_POST['endereco']}', '{$_POST['numero']}'), '{$_POST['complemento']}', '{$_POST['salvar como']}'";

        $query = mysqli_query($mysql, $consulta);
    }
?>