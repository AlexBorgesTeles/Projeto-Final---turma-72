<?php
include 'baseDate.php';
$id = $_GET['camisa'];
$sql = "select * from `camisa` where id_camisa= ".$id."";
$consulta= mysqli_query($connection, $sql);
$resultado = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
echo json_encode($resultado);
?>
