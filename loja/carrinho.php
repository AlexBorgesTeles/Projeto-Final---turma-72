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
if(isset($_GET['ok']) and $_GET['ok'] == 1){echo "<div class='alert alert-success alert-dimissible fade show' role='success'>Produto foi retirado do carrinho!<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";}
$sql = "SELECT * FROM carrinho JOIN estoque ON carrinho.fk_id_pessoa = {$_SESSION["user_id"]} join camisa on estoque.id_estoque = carrinho.fk_id_estoque WHERE id_camisa = estoque.fk_id_camisa;";
$query = mysqli_query($mysql, $sql);
$dados = mysqli_fetch_all($query, MYSQLI_ASSOC);
#var_dump($dados);
echo "<div class='container'>";
foreach ($dados as $q) {
    echo "<div class='col-3 btn'><div class='card' style='background-color: #4F4F4F'>
	                     <img src='../imagens/{$q["imagem"]}' class='card-img-top'alt='#' >
						<div class='card-body' style='color:white'>
                            <h4 class='card-title' >{$q["estampa"]}</h4>
                            <h6 class='card-body'>tamanho disponivel: 
                            {$q["tamanho"]}</h6>
                            <p class='card-text'>cor disponivel: {$q["cor"]}</p>
                            <p class='card-text'> quantidade requisitada: {$q["quantidade"]}</p>
                            <p class='card-text'>quantidade no estoque: {$q["quantidade_e"]}</p>
                            <p class='card-text'>R$ {$q["preco"]}</p>  
                            <p class='card-text' style='color:white;'>";
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
	<a href='deleteproduto.php?delete={$q['id_carrinho']}' class='btn btn-danger'>Remover produto</a>
	</div>
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
<?php include "footer.php";
?>
