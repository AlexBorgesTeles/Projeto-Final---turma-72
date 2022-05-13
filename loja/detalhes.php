<?php
	include "conexao.php";
	$titlePage = "CAMISA DE TIDE PARA CASAL";
	include "header.php";
?>
<div class="container">
    <div class="row mt-2">
        <div class="col-4">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../imagens/vestidos.png" class="d-block w-100 mb-3" alt="casal vestidos na camisa" height: 60px;>
                    </div>
                    <div class="carousel-item">
                        <img src="../imagens/mostra.jpeg" class="d-block w-100 mb-3" alt="camisa dobrada" height: 60px;>
                    </div>
                </div>
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
                    <a class="bi bi-messenger" href="#" role="button" style="color:deepskyblue;"></a>
                    <a class="bi bi-facebook" href="#" role="button" style="color:blue;"></a>
                    <a class="bi bi-pinterest" href="#" role="button" style="color:red;"></a>
                    <a class="bi bi-twitter" href="#" role="button" style="color:dodgerblue;"></a>
                    <a class="bi bi-whatsapp" href="#" role="button" style="color:rgb(23, 185, 23);"></a>
                    <a class="bi bi-telegram" href="#" role="button" style="color:rgb(45, 45, 221);"></a><br>
                    <a class="bi bi-heart" href="#" role="button" style="color:rgb(255, 32, 32);"></a>
                    <a href="#" role="button" style="color:black;">Favoritar (587)</a>
            </div>
        </div>

        <div class="col-8">
            <h5>CONJUNTO CASAL CAMISA FEMININA + CAMISA MASCULINA SELEÇÃO BRASIL MODELO 2019</h5> 
            <p>5 estrelas | 8 avaliações | 500 vendidas</p>
            <h2 style="padding-left: 20px; color: orange;">R$239,99</h2>
            <div class="row">
                <div class="col-4 mt-4" style="color: gray; padding-left: 33px;">
                    <span>Frete</span>
                </div>
                <div class="col-8 mt-4">
                    <i class="bi bi-calendar-check" style="color: red;"></i> <span style="color: red;">Encomenda (envio em 30 dias)</span><br>
                    <i class="bi bi-truck" style="color: green;"></i>
                    <span>Frete grátis com cupom<span><br>
                    <span style="margin-left: 20px; color: gray;">Para compras acima de R$29,00</span>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-4" style="padding-left: 33px; color: gray;">
                    <p>TAMANHO MASCULINA</p>
                </div>
                <div class="col-8 flex items-center TvGNLb" style="padding-left: 33px;">
                    <button class="product-variation" aria-label="P" aria-disabled="false">P</button>
                    <button class="product-variation" aria-label="M" aria-disabled="false">M</button>
                    <button class="product-variation" aria-label="G" aria-disabled="false">G</button>
                    <button class="product-variation" aria-label="GG" aria-disabled="false">GG</button>
                </div>
            </div>
                   
            <div class="row mt-2">
                <div class="col-4" style="padding-left: 33px; color: gray;">
                    <p>TAMANHO FEMININA</p>
                </div>
                <div class="col-8 flex items-center TvGNLb" style="padding-left: 33px;">
                    <button class="product-variation" aria-label="P" aria-disabled="false">P</button>
                    <button class="product-variation" aria-label="M" aria-disabled="false">M</button>
                    <button class="product-variation" aria-label="G" aria-disabled="false">G</button>
                    <button class="product-variation" aria-label="GG" aria-disabled="false">GG</button>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-4" style="padding-left: 33px; color: gray;">
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
                    <a class="btn btn-outline-danger btn-lg" href="#" role="button"><i class="bi bi-cart-plus"></i>Adicionar ao carrinho</a>
                </div>
                <div class="col">
                    <a class="btn btn-danger btn-lg" href="#" role="button">Comprar agora</a>
                </div>
            </div>

        </div>
        
    </div>

</div>
<?php 
	include "footer.php";
?>

