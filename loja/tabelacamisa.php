<?php
	include "conexao.php";
	$titlePage = "Página Adcionar Produto";
	include "cabecalho.php";

	$id= $_GET['indice'];
	$sql="SELECT `estampa`,`marca`,`imagem`,`descricao`,`avaliacao`,`preco` FROM camisa;";
	$query_01= mysqli_query($mysql,$sql);
	$fecth_01= mysqli_fetch_assoc($query_01)
	echo "<pre>";
   	var_dump ($fecth_01);
   	echo "</pre>";
?>
<body>
	<div class="container">
		<div class="row">
			<table class="table table-striped taable-dark">
				<thead>
					<tr>
						<th scope="col">Estampa</th>
						<th scope="col">Marca</th>
						<th scope="col">Imagem</th>
						<th scope="col">Descrição</th>
						<th scope="col">Avaliação</th>
						<th scope="col">PreÇo</th>
					</tr>
				</thead>
				<tbody>

				</tbody>
			</table>
		</div>
	</div>
</body>
<?php 
	include "footer.php";
?>