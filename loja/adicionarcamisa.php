<?php
	include "conexao.php";
	$titlePage = "Página Adcionar Produto";
	include "cabecalho.php";

    //ENVIAR NA TABELA CAMISA
    $sql="INSERT INTO `camisa`( `estampa`, `marca`, `imagem`, `descricao`, `avaliacao`, `preco`) VALUES ('{$_POST['estampa']}','{$_POST['marca']}','{$_POST['imagem']}','{$_POST['descricao-texto']}','{$_POST['avaliacao']}','{$_POST['preco']}')";
    //$enviar= mysqli_query($mysql,$sql);
    //echo "<pre>";
    //var_dump($_POST);
    //echo "</pre>";

    //Deixar aberto
    $_POST['estampa'] = " ";
    $_POST['marca' ]= " ";
    $_POST['imagem'] = " ";
    $_POST['descricao-texto'] = " ";
    $_POST['avaliacao'] = " ";
    $_POST['preco'] = " ";
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
                            <i class="bi bi-wrench-adjustable-circle"> Customizar a conta</i>
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a href="adcionarcamisa.php" class="nav-link text-white">
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
                    <span class="text center-align "><h4 class="border border-dark"><b>Adicione as informações do produto:</b></h4></span>
                    <form method="post" action="adicionarcamisa.php">
                        <div class="row flex">
                            <div class="col-6">
                                <!----Estampa--->
                                <label for="estampa">Estampa:</label>
                                <input type="text" class="form-control" placeholder="Estampa..." id="1" name="estampa">
                            </div>
                            <div class="col-6">
                                <!----Marca--->
                                <label for="marca">Marca:</label>
                                <input type="text" class="form-control" placeholder="Marca..." id="2" name="marca">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 mb-3">
                                <!----Avaliação--->
                                <label for="avaliação">Avaliação:</label>
                                <input type="number" class="form-control" placeholder="0" id="3" name="avaliacao" step="1" min="0" max="5">
                            </div>
                            <div class="col-7 mb-3">
                                <!----Imagem--->
                                <label for="imagem">Imagem:</label>
                                <input type="text" class="form-control" placeholder="camisa.png..." id="4" name="imagem">
                            </div>
                            <div class="col-3 mb-3">
                                <!----Preço--->
                                <label for="preco">Preço:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">R$</span>
                                    </div>
                                    <input type="number" class="form-control" aral-label="Amount" placeholder="10.00" id="5" name="preco" step="0,00" min="0,00" max="1.000,00">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <!----Descrição--->
                                <label for="descricao">Descrição:</label><br>
                                <textarea id="descricao" class="form-control" name="descricao-texto" rows="10" cols="30" wrap="hard">

                                </textarea>
                            </div>
                        <div class="row">
                            <div class="col-4 offset-4">   
                            <button type='submit' class='btn btn-secondary'>Enviar</button>
                        </div>
                            <!----Modal no Botão--->
                        </div>
                            <div class="modal fade" id="laranja" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                            <div class="modal-dialog">
		                            <div class="modal-content">
		                                <div class="modal-header">
			                                <h5 class="modal-title" id="exampleModalLabel">AVALIAÇÃO DAS INFORMAÇÕES:</h5>
		                                </div>
                                        <div class='modal-body'>
                                            <span>Suas informações estão corretas e foram enviadas com sucesso!</span>
                                        </div>
                                        <div class='modal-footer'>
                                            <?php 
                                            if($_POST['estampa'] and $_POST['marca'] and $_POST['imagem'] and $_POST['descricao-texto'] and $_POST['estampa'] and $_POST['avaliacao'] and $_POST['preco']
                                            != ""){
                                            echo "<button type='submit' class='btn btn-secondary'>Enviar</button>";}
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </form>
                    
                    <!---Modal e Button--->
                    <div class="row">
                        <div class="col-4 offset-4">
                            
                        <button type="button" class="w-100 btn-dark mt-3" data-bs-toggle="modal" data-bs-target="#laranja">
                            Enviar
                        </button>
                    </div>

                </div>
        </div>
    </div>
</body>
<?php 
	include "footer.php";
?>
<script>
        var Resposta = new bootstrap.Modal(document.getElementById('laranja'),)
            Resposta.show()
</script>