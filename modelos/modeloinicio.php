<?php
	include "conexao.php";
	$titlePage = "Página exemplo";
	include "cabecalho.php";

    $sql="SELECT `id_camisa`,`imagem`,`marca`,`descricao`,`avaliacao`,`preco`,`estampa` FROM camisa;";
   $query = mysqli_query($mysql,$sql);
   $fetchvisual = mysqli_fetch_all($query);
?>
<div class="container">
        <div class="row">
        <!----Linha-->
        <br style="p-3">
        <!---- Fim Linha-->
        <!----Slide Central-->
        <div class="row m-3">
            <div class="col-6 btn p-3">
                <img src="../imagens/camisetas1.jpg" id="Slide1" alt="Slide1" style="height: 400px; width: 320"/>
            </div>
            <div class="col-4 btn p-3">
                <div class="container">
                    <div class="row center ">
                        <div class="col-12 m-1">
                            <img src="../imagens/slide01.jpg" id="Slide2" alt="Slide2" style="height: 195px; width: 120;"/>
                        </div>
                    </div>
                    <div class="row center ">
                        <div class="col-12 m-1">
                            <img src="../imagens/slide1.png" id="Slide3" alt="Slide3" style="height: 195px; width: 120;"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!----Fim Slide Central-->
        <div class="row">
            <div class="col">
                <h3 style="font-family:New Century;"> Em estoque - Marcas Famosas - Aproveite as promoções </h3>
            </div>
        </div>
        <!----Linha-->
        <br style="p-3">
        <!---- Fim Linha-->
        <div class="row">
            
            <?php 
			foreach($fetchvisual as $colunaresposta){
                echo "
				<div class='col-3 btn'>
                    <div class='card'>
                            <img src='../imagens/$colunaresposta[1]' class='card-img-top' alt='camisasC' style='height: 200px;'>
                        <div class='card-body'>
                            <h6 class='card-title'><b>$colunaresposta[2]</b> - $colunaresposta[6]</h6>
                            <p class='card-text'>R$$colunaresposta[5]</p>
                            <p class='card-text'>";
                            $contador=0;
                            while($contador < 5){
                                if($colunaresposta[4] > $contador){
                                    echo "<i class='bi bi-star-fill'></i>";
                                }
                                if($colunaresposta[4] < $contador){
                                    echo "<i class='bi bi-star'></i>";
                                }
                                $contador++;
                            }
                            echo "</p>
                            <a href='carrinho.php?id_camisa=$colunaresposta[0]' class='btn btn-warning'>Comprar</a>
                            <a href='carrinho.php?id_camisa=$colunaresposta[0]' class='btn btn-dark'>Carrinho</a>
                        </div>
                    </div>
				</div>
                ";
			}
            ?>
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
