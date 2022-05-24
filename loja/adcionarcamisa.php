<?php
	include "conexao.php";
	$titlePage = "Página Adcionar Produto";
	include "cabecalho.php";
?>
<body>
    <div class="container">
        <div class="row justicy-content-center">
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
                        <a href="#" class="nav-link text-white">
                            <i class="bi bi-wrench-adjustable-circle"> Customizar</i>
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a href="adcionarcamisa.php" class="nav-link text-white">
                            <i class="bi bi-plus-circle"></i> Adcionar Produtos</i>
                        </a>
                    </li>
                    <li>
                    <a href="#" class="nav-link text-white">
                            <i class="bi bi-scissors"></i> Alterar Produtos</i>
                        </a>
                    </li>
                </ul>
            </div>
                <span class="text center-align"> Adicione as informações do produto:</span>
                <form method="post" action="adicionarcamisa.php">
                <div class="col-4">
                    <label for="estampa">Estampa da camisa:</label>
                    <input type="text" class="form-control" id="1" name="estampa">
                </div>
                <div class="col-4">
                    <label for="marca">Estampa da camisa:</label>
                    <input type="text" class="form-control" id="2" name="marca">
                </div>
                <div class="col-4">
                    <label for="imagem">Imagem da camisa:</label>
                    <input type="text" class="form-control" id="3" name="imagem">
                </div>
                <div class="col-12">

                </div>
                </form>
        </div>

    </div>
</body>
<?php 
	include "footer.php";
?>