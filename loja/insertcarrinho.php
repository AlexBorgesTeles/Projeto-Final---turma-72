<?php
include "conexao.php";
session_start();
$titlePage = "Adicionar ao carrinho";
include "cabecalho.php";
$id = $_GET["id_estoque"];

$select = "select * from estoque where id_estoque = {$id} and tamanho = '{$_GET["tam"]}'";
$query4 = mysqli_query($mysql, $select);
$estoque = mysqli_fetch_assoc($query4);
if($estoque['fk_id_camisa'] == null){
	header('Location: home.php');
}
var_dump($estoque);
echo '<br>';

if(isset($_SESSION["user_id"]) and $_SESSION["user_id"] != ""){
    $sql2 = "select * from pessoa where id_pessoa = " . $_SESSION["user_id"];
    $query = mysqli_query($mysql, $sql2);
    $pessoa = mysqli_fetch_assoc($query);
    $nome = $pessoa["nome"];
}else{
	header('Location: login.php?error=1');
}

$chamada = "select * from pedido where fk_id_pessoa = {$_SESSION["user_id"]}";
$Q = mysqli_query($mysql, $chamada);
$dados = mysqli_fetch_assoc($Q);
var_dump($dados);
echo "<br>";

//Caso não exista pedido ---
if ($dados["id_pedido"] == 0){
	echo "Não tem pedido";
	echo "<br>";

    $insert ="insert into `pedido` (`fk_id_pessoa`,`data`,`status`) values('{$_SESSION["user_id"]}','" .
        date("Y-m-d") ."', 'Em andamento')";
    $query3 = mysqli_query($mysql, $insert);
	
}
//caso pedido exista e esteja fechado:
if ($dados["id_pedido"] != 0 and $dados["status"] != "Em andamento"){
	echo "pedido fechado";
	echo "<br>";
    $insert ="insert into `pedido` (`fk_id_pessoa`,`data`,`status`) values('{$_SESSION["user_id"]}','". date("Y-m-d") ."', 'Em andamento')";
    $query3 = mysqli_query($mysql, $insert);
}
//caso o pedido exista e esteja ativo
$selectpedi = "SELECT * FROM `pedido` WHERE `fk_id_pessoa` = {$_SESSION["user_id"]} and `status` = 'Em andamento'";
$query = mysqli_query($mysql, $selectpedi);
$pedido = mysqli_fetch_assoc($query);
echo "pedido em aberto";
echo "<br>";
var_dump($pedido);
echo "<br>";
//pegar info de estoque

	if($_GET['quantidade'] > $estoque['quantidade_e']){
		header('Location: detalhes.php?id_camisa='.$estoque['fk_id_camisa'].'&error=qtd');
		die();
	}
	if($estoque['quantidade_e'] == 0){
		header('Location: detalhes.php?id_camisa='.$estoque['fk_id_camisa'].'&error=estoque');
		die();
	}

	
	if($_GET['quantidade'] != '' and $_GET["tam"] != ''){
		$testesql = "select * from carrinho where fk_id_pessoa = {$_SESSION["user_id"]} and fk_id_estoque = {$id}";
		$query = mysqli_query($mysql, $testesql);
		$carrinho = mysqli_fetch_assoc($query);
		var_dump($carrinho);
		if($carrinho['id_carrinho']){
			
			$update = "update `carrinho` set `quantidade` = ".$_GET['quantidade']." + 1 where `id_carrinho` = ". $carrinho['id_carrinho']."";
			$consulta = mysqli_query($mysql, $update);
			$fetchupdate = mysqli_fetch_assoc($consulta);
			echo "<br>";
		}else{
			$insertcarrinho = "insert into `carrinho` (`fk_id_pessoa`,`fk_id_estoque`, `quantidade`, `fk_id_pedido`) values ('{$pessoa['id_pessoa']}','{$estoque['id_estoque']}','{$_GET['quantidade']}','{$pedido['id_pedido']}')";
			$query = mysqli_query($mysql, $insertcarrinho);
			die();
			header('Location: home.php?sucess=1');
		}
	}else{
		header('Location: detalhes.php?id_camisa='.$estoque['fk_id_camisa'].'&error=1');
	}
//verificar se existe $id no $pedido
//caso sim: adiciona um na quantidade
//se não adiciona um novo
// se $estoque and $_GET["tam"] forem != ''
	
//else{header("Location: home.php?error=1");}
?>
