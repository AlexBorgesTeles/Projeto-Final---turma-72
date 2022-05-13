<?php
	include "conexao.php";
	$titlePage = "Página exemplo";
	include "header.php";
?>
<div class="container">
        <div class="row">
        <!----Linha-->
        <br style="p-3">
        <!---- Fim Linha-->
        <!----Slide Central-->
        <div class="row">
            <div class="col-6 btn p-3">
                <img src="../imagens/camisetas1.jpg" id="Slide1" alt="Slide1" style="height: 400px; width: 320"/>
            </div>
            <div class="col-4 btn p-3">
                <div class="container">
                    <div class="row">
                        <div class="flex col-12">
                            <img src="../imagens/slide01.jpg" id="Slide2" alt="Slide2" style="height: 200px; width: 120;"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 p-10">
                            <img src="../imagens/slide1.png" id="Slide3" alt="Slide3" style="height: 200px; width: 120;"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!----Fim Slide Central-->
        <div class="row">
            <div class="col">
                <h3 style="text-align: center;"><b>Em estoque - Marcas Famosas - Aproveite as promoções </b></h3>
            </div>
        </div>
        <!----Linha-->
        <br style="p-3">
        <!---- Fim Linha-->
        <div class="row">
            <div class="col-3 btn">
                <div class="card" >
                        <img src="../imagens/camisas2.jpg" class="card-img-top" alt="camisasC" style="height: 250px">
                    <div class="card-body">
                        <h5 class="card-title">Marca e Estampa</h5>
                        <p class="card-text">R$00,00</p>
                        <a href="#" class="btn btn-warning">Coloque no carrrinho</a>
                    </div>
                </div>
            </div>
            <div class="col-3 btn">
                <div class="card" >
                        <img src="../imagens/camisas3.jpg" class="card-img-top" alt="camisasC" style="height: 250px">
                    <div class="card-body">
                        <h5 class="card-title">Marca e Estampa</h5>
                        <p class="card-text">R$00,00</p>
                        <a href="#" class="btn btn-warning">Coloque no carrrinho</a>
                    </div>
                </div>
            </div>
            <div class="col-3 btn">
                <div class="card" >
                        <img src="../imagens/poloM01.jpg" class="card-img-top" alt="camisasC" style="height: 250px">
                    <div class="card-body">
                        <h5 class="card-title">Marca e Estampa</h5>
                        <p class="card-text">R$00,00</p>
                        <a href="#" class="btn btn-warning">Coloque no carrrinho</a>
                    </div>
                </div>
            </div>
            <div class="col-3 btn">
                <div class="card" >
                        <img src="../imagens/poloF02.jpg" class="card-img-top" alt="camisasC" style="height: 250px">
                    <div class="card-body">
                        <h5 class="card-title">Marca e Estampa</h5>
                        <p class="card-text">R$00,00</p>
                        <a href="#" class="btn btn-warning">Coloque no carrrinho</a>
                    </div>
                </div>
            </div>
        </div>
        <!----Linha-->
        <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../imagens/camisetas4.jpg" style="height: 500px; width: 120" class="d-block w-100" alt="carrosel1">
                    </div>
                    <div class="carousel-item">
                        <img src="../imagens/camisetas6.jpg" style="height: 500px; width: 120" class="d-block w-100" alt="carrosel2">
                    </div>
                    <div class="carousel-item">
                        <img src="../imagens/camisetas5.jpg" style="height: 500px; width: 120" class="d-block w-100" alt="carrosel3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Voltar</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Avançar</span>
                </button>
                </div>
        <div>
        <!----Linha-->
    </div> 
<?php 
	include "footer.php";
?>