<?php
	include "conexao.php";
	session_start();
	$titlePage = "Adicionar do carrinho";
	include "cabecalho.php";
	$id = $_GET['id_camisa'];
	#echo $id;
	if(isset($_SESSION['user_id']) and $_SESSION['user_id'] != ''){
		$sql2 = "select * from pessoa where id_pessoa = ".$_SESSION['user_id'];
		$query = mysqli_query($mysql,$sql2);
		$pessoa = mysqli_fetch_assoc($query);
		$nome = $pessoa['nome'];
	}
	
	$chamada = "select * from pedido where fk_id_pessoa = {$_SESSION['user_id']}";
	$Q = mysqli_query($mysql, $chamada);
	$dados = mysqli_fetch_assoc($Q);
	
	//Caso não exista pedido ---
	if($dados['id_pedido'] == 0){
		$insert = "insert into `pedido` (`fk_id_pessoa`,`data`,`status`) values('{$_SESSION['user_id']}','".date("Y-m-d")."', 'Em andamento')";
		$query3 = mysqli_query($mysql,$insert);
	}
	//caso pedido exista e esteja fechado:
	if($dados['id_pedido'] != 0 and $dados['status'] != 'Em andamento'){
		$insert = "insert into `pedido` (`fk_id_pessoa`,`data`,`status`) values('{$_SESSION['user_id']}','".date("Y-m-d")."', 'Em andamento')";
		$query3 = mysqli_query($mysql,$insert);
	}
	//caso o pedido exista e esteja ativo
	$selectpedi = "SELECT * FROM `pedido` WHERE `fk_id_pessoa` = {$_SESSION['user_id']} and `status` = 'Em andamento'";
	$query = mysqli_query($mysql,$selectpedi);
	$pedido = mysqli_fetch_assoc($query);
	
	//pegar info de estoque
	
	$select = "select * from estoque where fk_id_camisa = {$id}";
	$query4 = mysqli_query($mysql,$select);
	$estoque = mysqli_fetch_assoc($query4);
	echo "<br>-----------------";
	var_dump($estoque);
	
	if($estoque['quantidade_e'] == 0){echo 'Não há esse produto em nossos estoques!';}
	
	
	echo "cores disponiveis: {$lados[0][4]}";
	$selectestoque = "select id_estoque from estoque where fk_id_camisa = {$id}";
	$queryestoque = mysqli_query($mysql, $selectestoque);
	$idestoque = mysqli_fetch_all($queryestoque);
	var_dump($idestoque);
	$car = "insert into `carrinho` (`fk_id_pessoa`,`fk_id_estoque`,`quantidade`) values ('{$_SESSION['user_id']}','{$idestoque[0][0]}',6)";
	$insertcarrinho = mysqli_query($mysql, $car);
	$sectcarrinho = mysqli_fetch_all($insertcarrinho);
	var_dump($sectcarrinho);
	//Add pedido com os dados do usuario/data/ e status em andamento
	//pegar o id do pedido - https://www.w3schools.com/php/php_mysql_insert_lastid.asp > $last_id = mysqli_insert_id($conn);
	//pegar o id do estoque, qual é a cor da camisa?, tem no estoque?
	?>
