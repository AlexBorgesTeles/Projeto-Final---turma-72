
<?php
include "conexao.php";
    $id = $_GET['id_carrinho'];
    $consulta = "INSERT INTO entrega (`cep`, `estado`, `cidade`, `bairro`, `endereco`, `numero`, `complemento`) VALUES ('{$_POST['cep']}', '{$_POST['estado']}', '{$_POST['cidade']}', '{$_POST['bairro']}', '{$_POST['endereco']}', {$_POST['numero']}, '{$_POST['complemento']}')";
    $incluir = mysqli_query($mysql, $consulta);
    var_dump($incluir);
    if($incluir != NULL){
     header('Location: fimdecompra.php?sucess=2&id_carrinho='.$id.'');
    }else{header('Location: fimdecompra?error=1&id_carrinho='.$id.'');}
?>
