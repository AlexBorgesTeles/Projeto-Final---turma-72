<?php
	$servidor ='localhost';
	$usuario ='root'; 
	$senha = '';
	$banco = 'bancoloja';

	$mysql = mysqli_connect($servidor, $usuario, $senha, $banco);

	//já conectou, se tudo estiver certo.

	// teste de conexão
	if (!$mysql) {
	  echo "deu errado";
	}
?>