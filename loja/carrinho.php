<?php
$titlePage = "Página exemplo";
include "../modelos/cabecalho.php";
include "../modelos/conexao.php";
$id = $_GET['id_camisa'];
$sql = "select * from `carrinho` join estoque on estoque.fk_id_camisa = {$id} join camisa on camisa.id_camisa = {$id}";
$query = mysqli_query($mysql,$sql);
$dados = mysqli_fetch_all($query,MYSQLI_ASSOC);
foreach($dados as $q)
?>
<div class="container">
<?php
echo "
	        <div class='card'>
	  
      <img src='../imagens/{$q['imagem']}' class='card-img-top'alt='#' height='150px' width='200'>
      <p class='card-title'>
       {$q['estampa']}</p>
       <div class='card-text'>
       <p>{$q['tamanho']}</p>
       <p>{$q['cor']}</p>
       <p> quantidade requisitada: {$q['quantidade']}</p>
       <p>quantidade no estoque: {$q['quantidade_e']}</p>
       <p>R$ {$q['preco']}</p></div><p class='card-text>'";
       
       
$contador=0;
while($contador < 5){if($dados[0]['avaliacao'] > $contador){echo "<i class='bi bi-star-fill'></i>";}if($dados[0]['avaliacao'] < $contador){echo "<i class='bi bi-star'></i>";}
   $contador++;}
echo "</p><p><a href='' class='btn btn-danger'>Remover produto</a></p>
       </div>
       ";
?>
     	    <div class='row'>
	     <a href='detalhes.php' class='btn btn-warning'> Continuar compra</a>
	     <br>
	     <a href='home.php' class='btn btn-primary'> Finalizar compra</a>
        </div>
        </div>


<?php
	include "../modelos/footer.php";
?>