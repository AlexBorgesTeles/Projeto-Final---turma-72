<?php
include "conexao.php";
session_start();
$titlePage = "Adicionar ao carrinho";
include "cabecalho.php";
$id = $_GET["id_camisa"];
var_dump($id);
#echo $id;
if (isset($_SESSION["user_id"]) and $_SESSION["user_id"] != "") {
    $sql2 = "select * from pessoa where id_pessoa = " . $_SESSION["user_id"];
    $query = mysqli_query($mysql, $sql2);
    $pessoa = mysqli_fetch_assoc($query);
    $nome = $pessoa["nome"];
}

$chamada = "select * from pedido where fk_id_pessoa = {$_SESSION["user_id"]}";
$Q = mysqli_query($mysql, $chamada);
$dados = mysqli_fetch_assoc($Q);

//Caso não exista pedido ---
if ($dados["id_pedido"] == 0) {
    $insert =
        "insert into `pedido` (`fk_id_pessoa`,`data`,`status`) values('{$_SESSION["user_id"]}','" .
        date("Y-m-d") .

        "', 'Em andamento')";
    $query3 = mysqli_query($mysql, $insert);
}
//caso pedido exista e esteja fechado:
if ($dados["id_pedido"] != 0 and $dados["status"] != "Em andamento") {
    $insert =
        "insert into `pedido` (`fk_id_pessoa`,`data`,`status`) values('{$_SESSION["user_id"]}','" .
        date("Y-m-d") .
        "', 'Em andamento')";
    $query3 = mysqli_query($mysql, $insert);
}
//caso o pedido exista e esteja ativo
$selectpedi = "SELECT * FROM `pedido` WHERE `fk_id_pessoa` = {$_SESSION["user_id"]} and `status` = 'Em andamento'";
$query = mysqli_query($mysql, $selectpedi);
$pedido = mysqli_fetch_assoc($query);

//pegar info de estoque

$select = "select * from estoque where fk_id_camisa = {$id} and tamanho = {$_GET["tam"]}";
$query4 = mysqli_query($mysql, $select);
$estoque = mysqli_fetch_assoc($query4);

//verificar se existe $id no $pedido
//caso sim: adiciona um na quantidade
//se não adiciona um novo

if ($estoque["quantidade_e"] == 0) {
    echo "Não há esse produto em nossos estoques!";
} else {
    echo "";
}
// se $_GET['quantidade'] ou $_GET["tam"] forem != ''
if($_GET['quantidade'] != ''||$_GET["tam"] != ''){
$insertcarrinho = "insert into `carrinho` (`fk_id_pessoa`,`fk_id_estoque`, `quantidade`, `fk_id_pedido`) values ('{$pessoa["id_pessoa"]}','{$estoque["id_estoque"]}','{$_GET['quantidade']}','{$pedido["id_pedido"]}')";
$query = mysqli_query($mysql, $insertcarrinho);
header('Location: home.php?sucess=1');
}else{header('Location: detalhes.php?error=1');}
//else{header("Location: home.php?error=1");}
?>
