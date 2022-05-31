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
            <div class="d-flex flex-column col-2 flex-shrink-0 p-3 text-white bg-dark" style="width: 280;">
                <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <i class="bi bi-boxes"></i>
                    <span class="fs-4"> Opções</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">                    
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white">
                        <i class="bi bi-graph-up"> Relatórios</i>
                        </a>
                    </li>
					<li>
                        <a href="admpagina.php" class="nav-link text-white">
						<i class="bi bi-newspaper"> Informações da conta</i>
                        </a>
                    </li>
                    <li>
                        <a href="costumizaconta.php" class="nav-link text-white">
                            <i class="bi bi-wrench-adjustable-circle"> Customizar</i>
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a href="adicionarcamisa.php" class="nav-link text-white">
                            <i class="bi bi-plus-circle"></i> Adcionar Produtos</i>
                        </a>
                    </li>
                    <li>
                    <a href="tabelacamisa.php" class="nav-link text-white">
                            <i class="bi bi-scissors"></i> Alterar Produtos</i>
                        </a>
                    </li>
                </ul>
            </div>
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