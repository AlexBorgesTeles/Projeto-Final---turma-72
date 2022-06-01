<?php 
    session_start();
    include("conexao.php");

    if(isset($_SESSION['id_usuario']) and $_SESSION['id_usuario'] != ""){
        $sql_04 = "SELECT `nivel` FROM `usuario` WHERE id_usuario = '{$_SESSION['user_id']}'";
	    $query_enviar04 = mysqli_query($mysql,$sql_04);
	    $fetch_04 = mysqli_fetch_assoc($query_enviar04);

        if(isset($fetch_04['nivel']) and $fetch_04['nivel'] != 2){
            $sql_05= "SELECT `id_usuario`, `email`, `senha`, `nivel`, `fk_id_pessoa` FROM `usuario` WHERE id_usuario = '{$_SESSION['user_id']}'";
            $query_enviar05 = mysqli_query($mysql,$sql_05);
            $fetch_05 = mysqli_fetch_assoc($query_enviar05);
        }
    }else{
        header("Location:home.php");
        die();
    }
?>