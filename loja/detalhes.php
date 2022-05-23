<?php
	include "conexao.php";
	$titlePage = "CAMISA DE TIME PARA CASAL";
	include "cabecalho.php";
    $id = $_GET['id_camisa'];
    $select = "SELECT * FROM `camisa` WHERE `id_camisa` = {$id}";
    $info = mysqli_query($mysql, $select);
    $dados = mysqli_fetch_all($info, MYSQLI_ASSOC);

    foreach($dados as $linha){
        #var_dump($linha);
        echo "
            <div class='col-4'>
                <div class='card'>
                    <img src='../imagens/{$linha['imagem']}' style='height: 18rem; margin-top: 20px;' class='card-img-top'>
                    <div class='card-body'>
                    <h5 class='card-title'>{$linha['estampa']}<br>{$linha['preco']}</h5>
                    <p class='card-text'><b>{$linha['descricao']}</b></p>
                    <p clas='card-text'>";
                    for($i=1;$i<=$linha['avaliacao']; $i++){
                        echo "<i class=' text-warning bi bi-star-fill'></i>";
                    }
                    echo "</p>
                    <a href='insertcarrinho.php?id_camisa=$id' class='btn btn-danger'>Compre</a>
                    </div> 
                </div>
            </div>
        ";
    }
?>
<p id="camisa"></p>
<p id="escrita"></p>
<script type="text/javascript">
    let select = document.getElementById('camisa')
    let escrita = document.getElementById('escrita')
        select.onchange = function(){
            console.log(select.value) //o numero do select (ou valor)
            escrita.innerHTML = this.options[this.selectedIndex].text
            ajax(this.value)                   
        }
    function ajax(idcamisa){
        const xmlhttp = new XMLHttpRequest();
        //criacao da requisicao
        xmlhttp.onload = function() {
            // o que faz executar o codigo depois do AJAX
            //this.responseText = a resposta que o servidor da
            let data = JSON.parse(this.responseText);
            console.log(data);
            let luz = ''
            for(var i=1; i<=data[0].avaliacao; i++) {
                luz+="<i class=' text-warning bi bi-star-fill'></i>";
            }
            escrita.innerHTML = "<div class='col-4'> <div class='card'> <img src='icons/"+ data[0].imagem +"' class='card-img-top'> <div class='card-body'> <h5 class='card-title'>Por apenas "+ data[0].preco +"</h5> <p class='card-text'><strong>"+ data[0].estampa +"</strong></p> <p class='card-text text-truncate'><h6>"+ data[0].descricao +"</h6></p>"+luz+" <a href='#' class='btn btn-primary'>Boas compras</a></div></div></div>";
        }

        xmlhttp.open("GET", "load.php?formiga=" + idcamisa); // para onde vai o AJAX
        //a "?" divide a url da variavel
        xmlhttp.send();
        //envio "desconhecido" meio que nao tem funcao, porque e automatico
    }
            
</script>
<!--
    Preco e avaliacoes na mesma linha
    Todos na mesma linha
    Muda a ordem do preco
    Separa o menu da compra

<div class="container">
    <div class="row">
        <div class="col-4">
            <div id="carouselExampleIndicators" class="carousel slide mt-2" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../imagens/+data[0].imagem" class="d-block w-100 mb-3" alt="casal vestidos na camisa" height: 60px;>
                    </div>
                    <!--<div class="carousel-item">
                        <img src="../imagens/mostra.jpeg" class="d-block w-100 mb-3" alt="camisa dobrada" height: 60px;>
                    </div>-->
                <!--</div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div>
                <span>Compartilhe:</span>
                    <a class="bi bi-messenger" href="https://www.messenger.com/" role="button" style="color:deepskyblue;"></a>
                    <a class="bi bi-facebook" href="https://www.facebook.com/" role="button" style="color:blue;"></a>
                    <a class="bi bi-pinterest" href="https://br.pinterest.com/" role="button" style="color:red;"></a>
                    <a class="bi bi-twitter" href="https://twitter.com/" role="button" style="color:dodgerblue;"></a>
                    <a class="bi bi-whatsapp" href="#" role="button" style="color:rgb(23, 185, 23);"></a>
                    <a class="bi bi-telegram" href="#" role="button" style="color:rgb(45, 45, 221);"></a><br>
                    <a class="bi bi-heart" href="#" role="button" style="color:rgb(255, 32, 32);"></a>
                    <a href="#" role="button" style="color:black;">Favoritar (587)</a>
            </div>
        </div>

        <div class="col-8">
            <h5 class="mt-1">CONJUNTO CASAL CAMISA FEMININA + CAMISA MASCULINA - SELEÇÃO BRASILEIRA MODELO 2019</h5> 
            <div class="row">
                <div class="col-5">
                    <p style="padding-top: 0.5rem;">5 estrelas | 8 avaliações | 500 vendidas<p>
                </div>
                <div class="col">
                    <h2 style="color: orange;">R$239,99</h2>
                </div>
            </div>
            
            <div class="row">
                <div class="col-4 mt-4" style="color: gray;">
                    <span>Frete</span>
                </div>
                <div class="col-8 mt-4">
                    <i class="bi bi-calendar-check" style="color: red;"></i> <span style="color: red;">Encomenda (envio em 30 dias)</span><br>
                    <i class="bi bi-truck" style="color: green;"></i>
                    <span>Frete grátis com cupom<span><br>
                    <span style="margin-left: 20px; color: gray;">Para compras acima de R$29,00</span>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-4" style="color: gray;">
                    <p>TAMANHO MASCULINA</p>
                </div>
                <div class="col-8 flex items-center TvGNLb">
                    <button class="btn third">P</button>
                    <button class="btn third">M</button>
                    <button class="btn third">G</button>
                    <button class="btn third">GG</button>
                </div>
            </div>
                   
            <div class="row mb-3">
                <div class="col-4" style="color: gray;">
                    <p>TAMANHO FEMININA</p>
                </div>
                <div class="col-8 flex items-center TvGNLb">
                <button class="btn third">P</button>
                <button class="btn third">M</button>
                <button class="btn third">G</button>
                <button class="btn third">GG</button>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-4" style="color: gray;">
                    <label for="quant" class="form-label">Quantidade</label>
                </div>
                <div class="col-2">
                    <input type="number" class="form-control" name="quant">
                </div>
                <div class="col-4">
                    <span>3000 unidades disponíveis</span>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col" style="padding-left: 33px;">
                    <a class="btn btn-outline-danger btn-lg" href="insertcarrinho.php?camisa= <?php echo $dados[0][0];?>" role="button"><i class="bi bi-cart-plus"></i>Adicionar ao carrinho</a>
                </div>
                <div class="col">
                    <a class="btn btn-danger btn-lg" href="fimdecompra.php" role="button">Comprar agora</a>
                </div>
            </div>
        </div>

    </div>
</div>-->
<?php 
	include "footer.php";
?>
