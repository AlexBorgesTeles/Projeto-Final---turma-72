<?php
    session_start();
	if(!isset($_SESSION['user_id']) or $_SESSION['user_id'] == null){
		header("Location: login.php?erro=34");
	}
	include "conexao.php";
    if (isset($_SESSION["user_id"]) and $_SESSION["user_id"] != ""){
        $consulta = "SELECT * FROM pessoa WHERE id_pessoa = ". $_SESSION["user_id"];
        $busca = mysqli_query($mysql, $consulta);
        $pessoa = mysqli_fetch_assoc($busca);
        $nome = $pessoa["nome"];
    }
    #var_dump($_SESSION);
    include "conexao.php";
    $id = $_GET['id_camisa'];
    $select = "SELECT * FROM camisa JOIN estoque ON camisa.id_camisa = estoque.fk_id_camisa WHERE id_camisa = {$id}"; #echo $select;
    $info = mysqli_query($mysql, $select);
    $camisa = mysqli_fetch_assoc($info);

    $selecionar = "SELECT * FROM pessoa WHERE id_pessoa = ".$_SESSION['user_id']; #echo $selecionar;
    $pegar = mysqli_query($mysql, $selecionar);
    $pessoa = mysqli_fetch_assoc($pegar);
	$titlePage = "Finalizando sua compra!";
	include "cabecalho.php";
?>


<?php
    include "footer.php";
?>