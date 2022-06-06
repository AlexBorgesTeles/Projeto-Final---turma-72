
<?php
include "conexao.php";
session_start();
$titlePage = "Carrinho";
include "cabecalho.php";
if (isset($_SESSION["user_id"]) and $_SESSION["user_id"] != "") {
    $sql2 = "select * from pessoa where id_pessoa = " . $_SESSION["user_id"];
    $query = mysqli_query($mysql, $sql2);
    $pessoa = mysqli_fetch_assoc($query);
    $nome = $pessoa["nome"];
}else{header('Location: login.php?carrinho=1');}
if(isset($_GET['ok']) and $_GET['ok'] == 1){echo "<div class='alert alert-success alert-dimissible fade show' role='success'>Produto foi retirado do carrinho!<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";}
$sql = "SELECT * FROM carrinho JOIN estoque ON carrinho.fk_id_pessoa = 8 join camisa on estoque.id_estoque = carrinho.fk_id_estoque join pedido on id_pedido=carrinho.fk_id_pedido WHERE id_camisa = estoque.fk_id_camisa;";
$query = mysqli_query($mysql, $sql);
$dados = mysqli_fetch_all($query, MYSQLI_ASSOC);
#var_dump($dados);
echo "<div class='container'>";
foreach ($dados as $q) {
    echo "<div class='col-3 btn'><div class='card' style='background-color: #4F4F4F'>
	    <img src='../imagens/{$q["imagem"]}' class='card-img-top'alt='#' >
		<div class='card-body' style='color:white'>
            <h4 class='card-title' >{$q["estampa"]}</h4>
            <h6 class='card-body'>tamanho:{$q["tamanho"]}</h6>
            <p class='card-text'>cor: {$q["cor"]}</p>
            <p class='card-text'> quantidade: {$q["quantidade"]}</p
            <p class='card-text'>R$ {$q["preco"]}</p>
            <a href='fimdecompra.php?id_carrinho={$q['id_carrinho']}' class='btn btn-primary'>comprar agora</a>
            <a href='deleteproduto.php?delete={$q['id_carrinho']}' class='btn btn-danger'>Remover produto</a>
	    </div>
	</div>
	</div>";
}
?>
     	<div class='row'>
	     <a href='home.php' class='btn btn-dark'> Continuar compra</a>
	     <br>
       </div>
</div>
<?php include "footer.php";
?>
