<?php
include "conexao.php";
session_start();
if(isset ($_GET['apagar']) and $_GET['apagar']== 4)
{$sql = "delete from carrinho where id_carrinho={$_GET['delete']}";
header('Location: carrinho.php');
mysqli_query($mysql,$sql);
}
include "cabecalho.php";
?>

  <body>

<div class="container">
<h2><b>Tem certeza que deseja deletar esse produto do seu carrinho???(?_?)</b> </h2>
<a class="btn btn-danger"href="deleteproduto.php?apagar=4&del=<? $_GET['del'];?>">sim!</a>
<a class="btn btn-primary" href="carrinho.php" role="button">não</a>
</div>

  <?php 
include "footer.php";
?>