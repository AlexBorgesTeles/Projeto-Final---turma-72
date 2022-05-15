<?php
	$titlePage = "Página exemplo";
	include "cabecalho.php";
	include "conexao.php";
	$sql = 'select * from `carrinho` join estoque on estoque.id_estoque= carrinho.fk_id_estoque join camisa on camisa.id_camisa=estoque.fk_id_camisa';
	$query = mysqli_query($mysql,$sql);
	$dados = mysqli_fetch_all($query,MYSQLI_ASSOC);
?>
<div class="container">
	<div class="row">
	    <div class="col-2">
	        <div class="card">
      <img src="../imagens/<?php echo $dados[0]['imagem']?>" alt="#" height="150px" width="200">
       <p><?php echo $dados[0]['estampa']?></p>
       <p><?php echo $dados[0]['tamanho']?></p>
       <p><?php echo $dados[0]['cor']?></p>
       <p><?php echo $dados[0]['quantidade']?></p>
       <p><?php echo $dados[0]['preco']?></p>
       <p><?php echo $dados[0]['quantidade']?></p>
       <p>data da compra: <?php echo $dados[0]['data']?></p>
       <a href="" class="btn btn-danger">Remover produto</a>
      </div>
	  </div>
	  </div>
	  <br>
	<div class="row">
	    <a href="detalhes.php" class="btn btn-warning"> Continuar compra</a>
	    <a href="home.php" class="btn btn-primary"> Finalizar compra</a>
	</div>
</div>
<?php 
	include "footer.php";
?>