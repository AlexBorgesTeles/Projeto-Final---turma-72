<?php
include 'conexao.php';
$sql = "select * from usuario";
$query = mysqli_query($mysql,$sql);
$dados = mysqli_fetch_all($query, MYSQLI_ASSOC);
var_dump($dados);
if(isset($_POST['email']) and $_POST['email'] == $dados[0]
['email']){if($_POST['senha'] == $dados[0]['senha'])
{echo "Login efetuado!";
}}
if(isset($_POST['email']) and $_POST['email'] != $dados[0]['email']){echo "Email incorreto!";}
if(isset($_POST['senha']) and $_POST['senha'] != $dados[0]['senha']){echo "Senha incorreta";}
?>