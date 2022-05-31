<?php
    session_start();
	include "conexao.php";
	$titlePage = "Página Adicionar Produto";
	include "cabecalho.php";

    //ENVIAR NA TABELA CAMISA

    if (isset($_GET['confir']) and $_GET['confir'] == 1){
        $sql="INSERT INTO `camisa`( `estampa`, `marca`, `imagem`, `descricao`, `avaliacao`, `preco`) VALUES ('{$_GET['estampa']}','{$_GET['marca']}','{$_GET['imagem']}','{$_GET['descricao-texto']}','{$_GET['avaliacao']}','{$_GET['preco']}')";
        $enviar= mysqli_query($mysql,$sql);
    }
    //echo "<pre>";
    //var_dump($_POST);
    //echo "</pre>";
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
                        <a href="admpagina.php" class="nav-link text-white">
                        <i class="bi bi-newspaper"> Informações da conta</i>
                        </a>
                    </li>
                    <li>
                        <a href="costumizaconta.php" class="nav-link text-white">
                            <i class="bi bi-wrench-adjustable-circle"> Customizar a conta</i>
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
                    <span class="text center-align "><h4 class="border border-dark"><b>Adicione as informações do produto:</b></h4></span>
                    <form method="post" action="adicionarcamisa.php">
                        <div class="row flex">
                            <div class="col-6">
                                <!----Estampa--->
                                <label for="estampa">Estampa:</label>
                                <input type="text" class="form-control" placeholder="Estampa..." id="estampa" name="estampa" required>
                            </div>
                            <div class="col-6">
                                <!----Marca--->
                                <label for="marca">Marca:</label>
                                <input type="text" class="form-control" placeholder="Marca..." id="marca" name="marca">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 mb-3">
                                <!----Avaliação--->
                                <label for="avaliação">Avaliação:</label>
                                <input type="number" class="form-control" placeholder="0" id="avaliacao" name="avaliacao" step="1" min="0" max="5">
                            </div>
                            <div class="col-7 mb-3">
                                <!----Imagem--->
                                <label for="imagem">Imagem:</label>
                                <input type="text" class="form-control" placeholder="camisa.png..." id="imagem" name="imagem">
                            </div>
                            <div class="col-3 mb-3">
                                <!----Preço--->
                                <label for="preco">Preço:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">R$</span>
                                    </div>
                                    <input type="number" class="form-control" aral-label="Amount" placeholder="10.00" id="preco" name="preco" step="0,00" min="0,00" max="1.000,00">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <!----Descrição--->
                                <label for="descricao">Descrição:</label><br>
                                <textarea id="descricao" class="form-control" id="descricao" name="descricao-texto" rows="10" cols="30" wrap="hard"></textarea>
                            </div>
                            <!----Modal no Botão--->
                        </div>
                            <div class="modal fade" id="laranja" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                            <div class="modal-dialog">
		                            <div class="modal-content">
		                                <div class="modal-header">
			                                <h5 class="modal-title" id="exampleModalLabel">CONFIRMAÇÃO DE ENVIO:</h5>
		                                </div>
                                        <div class='modal-body'>
                                            <span id='error'>Análise de informações não viu nada de faltando, presssione para o link continuar, para confirmar o envio!</span>
                                        </div>
                                        <div class='modal-footer'>
                                            <a name="btn btn-dark" id='coisa' href="adicionarcamisa.php?">Confirmar</a>
                                            <?php
											// ou vc monta um GET paginadestino.php?estammpa=XXXX&marca=YYYY...
											//ou vc monta um ajax
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </form>
                    
                    <!---Modal e Button--->
                    <div class="row">
                        <div class="col-4 offset-4">
                        <button type="button" id="butao" class="w-100 btn-dark mt-3" >
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
		let butao = document.getElementById('butao')
		butao.onclick = function(){
			var Resposta = new bootstrap.Modal(document.getElementById('laranja'))
            Resposta.toggle()
			let estampa = document.getElementById('estampa')
			let marca = document.getElementById('marca')
            let imagem = document.getElementById('imagem')
            let avaliacao = document.getElementById('avaliacao')
            let preco = document.getElementById('preco')
            let descricao = document.getElementById('descricao')
			//testa se os inputs foram preenchidos
			if(estampa.value == "" || marca.value == "" || imagem.value == ""  || avaliacao.value == "" || preco.value == "" || descricao.value  == ""){
				console.log('Está algo errado!')
                let error = document.getElementById('error')
                error.innerHTML = "<p><h3 style='color: red'>Aviso!</h3><b> Alguma informação está faltando, retorne e a complete. </b></p>"
                if(estampa.value == ""){
                    error.innerHTML += "<p>Estampa faltando!</p>"+estampa.value
                }
                if(marca.value == ""){
                    error.innerHTML += " <p>Marca faltando!</p>"+marca.value
                }
                if(imagem.value == ""){
                    error.innerHTML += " <p>Imagem faltando!</p>"+imagem.value
                }
                if(avaliacao.value == ""){
                    error.innerHTML += " <p>Avaliação faltando!</p>"+avaliacao.value
                }
                if(preco.value == ""){
                    error.innerHTML += " <p>Preço faltando!</p>"+preco.value
                }
                if(descricao.value  == ""){
                    error.innerHTML += " <p>Descrição faltando!</p>"+descricao.value
                }
                let coisa = document.getElementById('coisa')
                coisa.href += coisa.href += "confir=1"
                die()
			}else{
                console.log('Ta tudo limpo meu patrão! Segue o movimento, vai vai!.')
                let coisa = document.getElementById('coisa')
                coisa.href += "confir=1"
                coisa.href += "&estampa="+estampa.value
                coisa.href += "&marca="+marca.value
                coisa.href += "&imagem="+imagem.value
                coisa.href += "&avaliacao="+avaliacao.value
                coisa.href += "&preco="+preco.value
                coisa.href += "&descricao-texto="+descricao.value
            }
		}
        //div.innerHTML
        //input.value
        //&&
</script>