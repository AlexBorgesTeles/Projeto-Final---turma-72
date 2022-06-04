<?php 
    session_start();
    include "conexao.php";
    $titlePage = "Página relátorio";
    include "cabecalho.php";

    //Colocar cards
    $sql="SELECT `id_camisa`,`imagem`,`marca`,`descricao`,`avaliacao`,`preco`,`estampa` FROM camisa LIMIT 0,21";
	$query = mysqli_query($mysql,$sql);
	$fetchvisual = mysqli_fetch_all($query);
?>
<style>
    .pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
    }
    .pagination a.active {
    background-color: WHITE;
    color: white;
    }
    .pagination a:hover:not(.active) {background-color: #65785C;
    }
</style>
<body>
    <div class='container'>
        <div class='row'>
            <?php 
            //CARDS
			foreach($fetchvisual as $colunaresposta){
                echo "
				<div class='col-3 btn '>
                    <div class='card' style='background-color: #65785C'>
                            <a href='detalhes.php?id_camisa={$colunaresposta[0]}'><img src='../imagens/$colunaresposta[1]' class='card-img-top' alt='camisasC' style='height: 200px;'></a>
                        <div class='card-body' style='color: white'>
                            <h6 class='card-title'><b>$colunaresposta[2]</b> - $colunaresposta[6]</h6>
                            <p class='card-text'>R$$colunaresposta[5]</p>
                            <div class='row'>
                                <div class='col'>
                                    <a href='carrinho.php?id_camisa=$colunaresposta[0]' class='btn btn-dark'>Comprar</a>
                                </div>
                                <div class='col'>
                                    <a href='detalhes.php?id_camisa=$colunaresposta[0]' class='btn btn-dark'>Detalhes</a>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
                ";
			}
            ?>
            <label><div class='row justify-content-md-center'>
                    <div class='col-lg-4' >
                            <div class="pagination">
                            <a href="#">&laquo;</a>
                            <a href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#">5</a>
                            <a href="#">6</a>
                            <a href="#">&raquo;</a>
                            </div>
                        </div> 
            </label></div>
        </div>
    </div>
</body>
<?php
    include 'footer.php';
?>