<?php
	session_start();
	include "conexao.php";
	$titlePage = "Página Adcionar Produto";
	include "cabecalho.php";

	$sql="SELECT `id_camisa`,`estampa`,`marca`,`imagem`, 
	left(`descricao` , 100) as descricao,
	`avaliacao`,`preco` FROM camisa;";
	$query_01= mysqli_query($mysql,$sql);
	$fecth_01= mysqli_fetch_all($query_01, MYSQLI_ASSOC);
	//echo "<pre>";
   	//var_dump ($fecth_01);
   	//echo "</pre>";
?>
<body>
	<div class="container">
		<div class="row ">
		<?php 
                include 'admmenu.php';
            ?>
				<div class="col-10">
					<table class="table table-striped table-dark">
						<thead>
							<tr>
								<th scope="col">Estampa</th>
								<th scope="col">Marca</th>
								<th scope="col">Imagem</th>
								<th scope="col">Descrição</th>
								<th scope="col">Avaliação</th>
								<th scope="col">Preço</th>
								<th scope="col"></th>
								<th scope="col"></th>
							</tr>
						</thead>
						<tbody>
							<?php 
					
							foreach($fecth_01 as $coluna_valor){
								echo "<tr>";
								echo "<td>".$coluna_valor['estampa']."</td>";
								echo "<td>".$coluna_valor['marca']."</td>";
								echo "<td>".$coluna_valor['imagem']."</td>";
								echo "<td ><span style='text-overflow: ellipsis;'>{$coluna_valor['descricao']}</span>"."</td>";
								echo "<td>".$coluna_valor['avaliacao']."</td>";
								echo "<td>".$coluna_valor['preco']."</td>";
								echo "<td><a class='btn btn-light' href='editarcamisa.php?tabela_editar={$coluna_valor['id_camisa']}' role='button'>Editar</a></td>";
								echo "<td><a class='btn btn-danger' href='removercamisa.php?tabela_deleta={$coluna_valor['id_camisa']}' role='button'>Remover</a></td>";
								echo "</tr>";
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
</body>
<?php 
	include "footer.php";
?>