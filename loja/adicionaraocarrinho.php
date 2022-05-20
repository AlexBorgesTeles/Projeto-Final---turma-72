<?php
$titlePage = "Página exemplo";
include "../modelos/cabecalho.php";
include "../modelos/conexao.php";
session_start();
$select = "select * from carrinho join estoque";
$sql = "insert into `carrinho` (`fk_id_pessoa`, `fk_id_estoque`, `quantidade`, `fk_id_pedido`) VALUES ('{$_SESSION['user_id']}','{$_SESSION['estoque_id']}','2','{$_SESSION['pedido']}')"; 
$query = mysqli_query($mysql,$sql);
$dados = mysqli_fetch_all($query,MYSQLI_ASSOC);
var_dump($dados)
?>