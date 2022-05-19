<?php
	$titlePage = "Página exemplo";
	include "cabecalho.php";
	include "conexao.php";
	$sql = 'select * from `carrinho` join estoque on estoque.id_estoque= carrinho.fk_id_estoque join camisa on camisa.id_camisa=estoque.fk_id_camisa';
	$query = mysqli_query($mysql,$sql);
	$dados = mysqli_fetch_all($query,MYSQLI_ASSOC);
	var_dump($dados);
	foreach($dados as $q){for($m =1.00; $m<=$q['avaliacao']; $m++){$q['avaliacao']+="<i class='text-warning bi bi-star-fill'></i>";
   }};
?>
<div class="container">
	<div class="row">
	    <div class="col-2">
	        <div class="card">
      <img src="../imagens/<?php echo $q['imagem']?>" alt="#" height="150px" width="200">
       <p><?php echo $q['<?php
$titlePage = "Página exemplo";
include "../modelos/cabecalho.php";
include "../modelos/conexao.php";
$id = $_GET['id_camisa'];
var_dump($id);
$sql2 = "select * from `carrinho` join camisa where id_camisa = "."{$id}". "";
$query2 = mysqli_query($mysql,$sql2);
$dados = mysqli_fetch_all($query2,MYSQLI_ASSOC);
foreach($dados as $q)
?>
<div class='container'>
	<div class='row'>
	    <div class='col-2'>
	        <div class='card'>
      <img src='../imagens/<?php echo $q['imagem'];?>' alt='#' height='150px' width='200'>
       <p><?php echo $q['estampa'];?></p>
       <p><?php echo $q['tamanho'];?></p>
       <p><?php echo $q['cor'];?></p>
       <p>quantidade: <?php echo $q['quantidade'];?></p>
       <p>R$<?php echo $q['preco'];?></p>
       <p>data da compra: <?php echo $q['data'];?></p>
       <p><?php echo $q['avaliacao'];?></p>
       <a href='' class='btn btn-danger'>Remover produto</a>
      </div>
	  </div>
	  </div>
	  <br>
	<div class='row'>
	    <a href='detalhes.php' class='btn btn-warning'> Continuar compra</a>
	    <a href='home.php' class='btn btn-primary'> Finalizar compra</a>
	</div>
</div>
<?php
	include "../modelos/footer.php";
?>
estampa']?></p>
       <p><?php echo $q['tamanho']?></p>
       <p><?php echo $q['cor']?></p>
       <p>quantidade no estoque: <?php echo $q['quantidade']?></p>
       <p>R$<?php echo $dados[0]['preco']?></p>
       <p>data da compra: <?php echo $q['data']?></p>
       <p><?php echo $q['avaliacao']?></p>
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
