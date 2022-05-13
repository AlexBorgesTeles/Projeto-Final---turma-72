<?php
	include "conexao.php";
	$titlePage = "Página exemplo";
	include "cabecalho.php";
?>
	<div class="container">
		<div class="row mt-2">
				
                <div class="col-4" id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
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

                    <span>Compartilhe:</span>
                    <a class="btn btn-primary bi bi-messenger" href="#" role="button"></a>
                    <a class="btn btn-primary bi bi-facebook" href="#" role="button"></a>
                    <a class="btn btn-primary bi bi-pinterest" href="#" role="button"></a>
                    <a class="btn btn-primary bi bi-twitter" href="#" role="button"></a>
                    <a class="btn btn-primary bi bi-whatsapp" href="#" role="button"></a>
                    <a class="btn btn-primary bi bi-telegram" href="#" role="button"></a>
                    <a class="btn btn-primary bi bi-discord" href="#" role="button"></a>
                    <a class="btn btn-link bi bi-heart" href="#" role="button"> Favoritar (587)</a>
                </div>

                <div class="col-8">
                    <h5>CONJUNTO CASAL CAMISA FEMININA + CAMISA MASCULINA SELEÇÃO BRASIL MODELO 2019</h5> 
                    <p>5 estrelas | 8 avaliações | 500 vendidas</p>
                    <h2 style="margin-left: 20px; color: orange;">R$239,99</h2>
                    <div class="col-3" style="color: gray; margin-left: 20px;">
                        <span>Frete</span>
                    </div>

                    <i class="bi bi-calendar-check" style="color: red; margin-left: 40px;"></i> <span style="color: red;">Encomenda (envio em 30 dias)</span><br>
                    <i class="bi bi-truck" style="color: green; margin-left: 40px;"></i><span> Frete grátis com cupom<span><br>
                    <span style="margin-left: 50px; color: gray;">Para compras acima de R$29,00</span>

                    <div class="col-2" style="margin-right: 50px; color: gray;">
                        <p>TAMANHO MASCULINA</p>
                    </div>
                    <div class="col-10 flex items-center TvGNLb">
                        <button class="product-variation" aria-label="P" aria-disabled="false">P</button>
                        <button class="product-variation" aria-label="M" aria-disabled="false">M</button>
                        <button class="product-variation" aria-label="G" aria-disabled="false">G</button>
                        <button class="product-variation" aria-label="GG" aria-disabled="false">GG</button>
                    </div>
                    <div class="col-2" style="margin-right: 50px; color: gray;">
                        <p>TAMANHO FEMININO </p>
                    </div>
                    <div class="col-10 flex items-center TvGNLb">
                        <button class="product-variation" aria-label="P" aria-disabled="false">P</button>
                        <button class="product-variation" aria-label="M" aria-disabled="false">M</button>
                        <button class="product-variation" aria-label="G" aria-disabled="false">G</button>
                        <button class="product-variation" aria-label="GG" aria-disabled="false">GG</button>
                    </div>
                    <div class="col-2" style="margin-right: 50px; color: gray;">
                        <label for="qunat" class="form-label">Quantidade</label>
                        <input type="number" class="form-control" name="quant">
                        <span>3000 unidades disponíveis</span>
                    </div>
                    <a class="btn btn-link" href="#" role="button"><i class="bi bi-cart-plus"></i>Adicionar ao carrinho</a>
                    <a class="btn btn-danger" href="#" role="button">Comprar agora</a>
                </div>

                        
            </div>

        </div>
<?php 
	include "footer.php";
?>

