<?php
include "conexao.php";
$sql="SELECT `id_pedido`, `fk_id_pessoa`, `data`, `status` FROM `pedido` WHERE 1";
$query=mysqli_query($mysql,$sql);
?>