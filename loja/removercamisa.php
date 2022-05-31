<?php
    include "conexao.php";
    $titlePage = "Página de Edição";
    include "cabecalho.php";

    if(isset($_GET['confimar01']) and $_GET['confimar01'] == 1 ){
        $sql_deletar = "DELETE FROM `camisa` WHERE id_camisa = {$_GET['indice']}";
        #echo $sql;
        mysqli_query($mysql, $sql_deletar);
        header("LOCATION: tabelacamisa.php");
    }
?>
<body>
    <div class="container">
      <div class="row" style="text-align: center">
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
                            <i class="bi bi-wrench-adjustable-circle"> Customizar</i>
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
              <h1><br><br><br><br>Tem certeza que vai excluir permanentemente esta camisa do seu inventário?</h1>
                <div class="offset-2 col-4">
                  <br><br><a class="btn btn-warning" href="removercamisa.php?confimar01=1&indice=<?php echo $_GET['tabela_deleta'];?>">SIM</a>
                </div>
                <div class="offset-2 col-1">
                  <br><br><a class="btn btn-danger" href="tabelacamisa.php" role="button">NÃO</a>
                </div>
            </div>
          </div>
      </div>
<?php
    include "footer.php";
?>