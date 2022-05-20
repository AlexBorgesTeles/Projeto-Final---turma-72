<?php
$titlePage = "Página exemplo";
include "cabecalho.php";
include "conexao.php";
session_start();
$select = "select * from carrinho join estoque";

//Add pedido com os dados do usuario/data/ e status em andamento
//pegar o id do pedido - https://www.w3schools.com/php/php_mysql_insert_lastid.asp > $last_id = mysqli_insert_id($conn);
//pegar o id do estoque, qual é a cor da camisa?, tem no estoque?
$sql = "insert into `carrinho` (`fk_id_pessoa`, `fk_id_estoque`, `quantidade`, `fk_id_pedido`) VALUES ('{$_SESSION['user_id']}','{$_SESSION['estoque_id']}','2','{$_SESSION['pedido']}')"; 
$query = mysqli_query($mysql,$sql);
$dados = mysqli_fetch_all($query,MYSQLI_ASSOC);
var_dump($dados)
?>