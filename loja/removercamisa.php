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
      <h1><br><br><br><br>Tem certeza que vai excluir permanentemente esta camisa do seu inventário?</h1>
        <div class="offset-2 col-4">
          <br><br><a class="btn btn-warning" href="removercamisa.php?confimar01=1&indice=<?php echo $_GET['tabela_deleta'];?>">SIM</a>
        </div>
        <div class="offset-2 col-1">
        <br><br><a class="btn btn-danger" href="tabelacamisa.php" role="button">NÃO</a>
        </div>
      </div>
    </div>
<?php
    include "footer.php";
?>