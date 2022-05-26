<?php
include "conexao.php";
session_start();
$titlePage = "Página exemplo";
include "cabecalho.php";
if(isset($_SESSION['user_id']) and $_SESSION['user_id'] != ''){
		$sql2 = "select * from pessoa where id_pessoa = ".$_SESSION['user_id'];
		$query = mysqli_query($mysql,$sql2);
		$pessoa = mysqli_fetch_assoc($query);
		$nome = $pessoa['nome'];
	}
$sql = "SELECT * FROM carrinho JOIN estoque ON carrinho.fk_id_pessoa = {$_SESSION['user_id']} join camisa on estoque.id_estoque = carrinho.fk_id_estoque WHERE id_camisa = estoque.fk_id_camisa;";
$query = mysqli_query($mysql,$sql);
$dados = mysqli_fetch_all($query,MYSQLI_ASSOC);
	foreach($dados as $q){
     echo " 	<div class='card' style='background-color: blue'>
	                     <img src='../imagens/{$q['imagem']}' class='card-img-top'alt='#' style='height: 110px; width:160px;'>
						<div class='card-body'>
                            <h4>{$q['estampa']}</h4></div>
                            <h6 class='card-title'>tamanho disponivel: 
                            {$q['tamanho']}</h6>
                            <p>cor disponivel: {$q['cor']}</p>
                            <p> quantidade requisitada: {$q['quantidade']}</p>
                            <p>quantidade no estoque: {$q['quantidade_e']}</p>
                            <p>R$ {$q['preco']}</p><p>   
                            <p>{$q['avaliacao']}</p><p>";   
                            $contador=0;
                            while($contador < 5){
								
								if($q['avaliacao'] > $contador){
									echo "<i class='bi bi-star-fill'></i>";
								}
								if($q['avaliacao'] < $contador){
									echo "<i class='bi bi-star'></i>";
								}
								$contador++;
							}
                            echo "</p>
						</div>
							
							<p><a href='deleteproduto.php?del={$q['id_carrinho']}' class='btn btn-danger'>Remover produto</a></p>
				</div>";
	}
       ?>
     	<div class='row'>

	     <a href='home.php' class='btn btn-dark'> Continuar comprando</a>

	     <br>
	     <a href='fimdecompra.php' class='btn btn-primary'> Finalizar compra</a>
       </div>
</div> 
<?php
       include "footer.php";
?>
