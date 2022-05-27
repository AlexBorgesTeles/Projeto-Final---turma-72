<?php
include "conexao.php";
session_start();
$titlePage = "Página exemplo";
include "cabecalho.php";
if (isset($_SESSION["user_id"]) and $_SESSION["user_id"] != "") {
    $sql2 = "select * from pessoa where id_pessoa = " . $_SESSION["user_id"];
    $query = mysqli_query($mysql, $sql2);
    $pessoa = mysqli_fetch_assoc($query);
    $nome = $pessoa["nome"];
}
$sql = "SELECT * FROM carrinho JOIN estoque ON carrinho.fk_id_pessoa = {$_SESSION["user_id"]} join camisa on estoque.id_estoque = carrinho.fk_id_estoque WHERE id_camisa = estoque.fk_id_camisa;";
$query = mysqli_query($mysql, $sql);
$dados = mysqli_fetch_all($query, MYSQLI_ASSOC);
#var_dump($dados);
foreach ($dados as $q) {
    echo " 	<div class= 'container'><div class='col-2 btn'><div class='card' style='background-color: #4F4F4F'>
	                     <img src='../imagens/{$q["imagem"]}' class='card-img-top'alt='#' style='height: 110px; width:160px;'>
						<div class='card-body'>
                            <h4 style='color:white;' >{$q["estampa"]}</h4></div>
                            <h6 class='card-title' style='color:white;'>tamanho disponivel: 
                            {$q["tamanho"]}</h6>
                            <p style='color:white;'>cor disponivel: {$q["cor"]}</p>
                            <p style='color:white;'> quantidade requisitada: {$q["quantidade"]}</p>
                            <p style='color:white;'>quantidade no estoque: {$q["quantidade_e"]}</p>
                            <p style='color:white;'>R$ {$q["preco"]}</p><p>   
                            <p style='color:white;'>{$q["avaliacao"]}</p><p style='color:white;'>";
    $contador = 0;
    while ($contador < 5) {
        if ($q["avaliacao"] > $contador) {
            echo "<i class='bi bi-star-fill'></i>";
        }
        if ($q["avaliacao"] < $contador) {
            echo "<i class='bi bi-star'></i>";
        }
        $contador++;
    }
    echo "</p>
						</div>
							
							<p><a href='deleteproduto.php?delete={$q['id_carrinho']}' class='btn btn-danger'>Remover produto</a></p>			
    </div>
   </div>";
}
?>
     	<div class='row'>
	     <a href='home.php' class='btn btn-dark'> Continuar compra</a>
	     <br>
	     <a href='fimdecompra.php' class='btn btn-primary'> Finalizar compra</a>
       </div>
   </div> 
</div>
<?php include "footer.php";
?>
