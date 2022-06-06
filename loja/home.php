<?php
    session_start(); //https://www.w3schools.com/php/php_sessions.asp
    include 'conexao.php'; // Incluir o cabeçalho
    $titlePage= 'Página Inicial'; //Título da página
    if (isset($_SESSION['user_id']) and $_SESSION['user_id'] !=''){
        $sql2 = 'SELECT * FROM pessoa WHERE id_pessoa = '.$_SESSION['user_id'];
        $query = mysqli_query($mysql, $sql2); //Ler o array
        $pessoa = mysqli_fetch_assoc($query); //Organiza o array
        $nome = $pessoa['nome']; 
    }
    //Se tiver $_SESSION e se ela for vazia, selecione a pessoa pelo id, dado pelo usuário. 
	
	include "cabecalho.php";
    
    $sql="SELECT `id_camisa`,`imagem`,`marca`,`descricao`,`avaliacao`,`preco`,`estampa` FROM camisa LIMIT 0,8";
	$query = mysqli_query($mysql,$sql);
	$fetchvisual = mysqli_fetch_all($query);

?>
<div class="container">
		<?php
		if(isset($_GET['sucess']) and $_GET['sucess'] != ''){
			echo "<div class='alert alert-success alert-dimissible fade show' role='success'>Produto adicionado ao carrinho com sucesso!<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
		}
		?>
        <!----Slide Central-->
        <div class="row">
            <div class="col-6 mt-1">
                <div class="row">
                        <img src="../imagens/camisetas1.jpg" width="520" height="420" id="Slide1" alt="Slide1"/>
                </div>
            </div>
            <div class="col-6">
                <div class="row text-center">
                    <div class="col-12 mb-3 mt-1">
                        <img src="../imagens/slide01.jpg" width="400" height="205" id="Slide2" alt="Slide2"/>
                    </div>
                    <div class="col-12">
                        <img src="../imagens/slide02.png" width="400" height="201" id="Slide3" alt="Slide3"/>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <hr style='color: black'>
        </div>
        <!----Fim Slide Central-->
        <div class="row">
            <div class="col">
                <h3 style="font-family:New Century; color:black;"> Em estoque - Marcas Famosas - Aproveite as promoções </h3>
            </div>
        </div>
        <!----Linha-->
        <div>
        <hr style='color: black'>
        </div>
        <!---- Fim Linha-->
        <div class="row">
            
            <?php 
			foreach($fetchvisual as $colunaresposta){
                echo "
				<div class='col-3 btn'>
                    <div class='card' style='background-color: #65785C'>
                            <a href='detalhes.php?id_camisa={$colunaresposta[0]}'><img src='../imagens/$colunaresposta[1]' class='card-img-top' alt='camisasC' style='height: 200px;'></a>
                        <div class='card-body' style='color: white'>
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
                            <a href='detalhes.php?id_camisa=$colunaresposta[0]' class='btn btn-dark'>Detalhes</a>
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
