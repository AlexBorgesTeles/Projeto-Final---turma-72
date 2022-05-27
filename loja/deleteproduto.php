<?php
include "conexao.php";
session_start();
if(isset ($_GET['apagar']) and $_GET['apagar']== 4){
	$sql = "delete from carrinho where id_carrinho={$_GET['delete']}";
	mysqli_query($mysql,$sql);
	header('Location: carrinho.php?ok=1');
}
$titlePage = "Remover Item";
include "cabecalho.php";
?>

  <body>

<div class="container">
<h2><b>Tem certeza que deseja deletar esse produto do seu carrinho???(?_?)</b> </h2>
<a class="btn btn-danger"href="deleteproduto.php?apagar=4&delete=<?= $_GET['delete'];?>">sim!</a>
<a class="btn btn-primary" href="carrinho.php" role="button">não</a>
</div>

  <?php 
include "footer.php";
?>