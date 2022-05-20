<?php
	include "conexao.php";
	$titlePage = "Página Interna ADM";
	include "cabecalho.php";

    $sql_seleciona= "SELECT * FROM `usuario` JOIN `pessoa` ON `id_pessoa` = `fk_id_pessoa`;";
    #select * from usuario join pessoa on id_pessoa = fk_id_pessoa
    #$sql_seleciona= "SELECT `id_pessoa`,`nome`,`cpf`,`rg`,`endereco`,`idade`,`telefone` FROM pessoa;";
    #$sql_seleciona= "SELECT `id_pessoa`,`nome`,`cpf`,`rg`,`endereco` FROM pessoa;";
    #$sql_seleciona="SELECT `id_usuario`,`email`,`senha`,`nivel`,`fk_id_pessoa` FROM usuario;";
   $query_ler = mysqli_query($mysql, $sql_seleciona);
   $fetch_organiza = mysqli_fetch_all($query_ler);
   // echo "<pre>";
   // var_dump($fetch_organiza);
   // echo "</pre>";
?>
<style>
    .color-linha{
        background-color: black;
        padding: -2px;
    }
</style>
<body>

    <div class="container">
        <div class="row">
            <div class="d-flex flex-column col-2 flex-shrink-0 p-3 text-white bg-dark" style="width: 280;">
                <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <i class="bi bi-boxes"></i>
                    <svg class="bime-2" width="40" height="32">
                        <use xlink:href="home.php"></use>
                    </svg>
                    <span class="fs-4">Menu Maneiro</span>
                </a>
            </div>
            <div class="col-5">
                <h4 class="mb-3 color-linha text-white">Informações do Administrador:</h4>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <h6><b>Usuario:</b></h6>
                            <p><?php echo $fetch_organiza[0][6]; ?></p>
                        </div>
                        <div class="col-sm-6">
                            <h5>Senha Registrada:</h6>
                            <p><?php echo $fetch_organiza[0][2]; ?></p>
                        </div>
                        <div class="col-12">
                            <h6>Email registrado:</h6>
                            <p><?php echo $fetch_organiza[0][1]; ?></p>
                        </div>
                        <div class="col-6">
                            <legend>
                                <span>Nível de controle:</span>
                            </legend>
                                <?php if($fetch_organiza[0][3] == 1){
                                    echo "<span> Administrador </span>";
                                }else{
                                    echo "<span> Cliente </span>";
                                }
                                ?>
                        </div>
                    </div>
            </div>
            <div class="col-4" >
                <form>
                    <div class="row g-3">
                        <div class = "col-sm-8">
                            <h6 >Nome Completo:</h6>
                            <span><?php echo $fetch_organiza[0][6]; ?></span>
                        </div>
                        <div class = "col-sm-4">
                            <h6>Idade:</h6>
                            <span><?php echo $fetch_organiza[0][10]." anos"; ?></span>
                        </div>
                        <div class = "col-sm-6">
                            <h6>CPF:</h6>
                            <span><?php echo $fetch_organiza[0][7]; ?></span>
                        </div>
                        <div class="col-sm-6">
                            <h6>RG:</h6>
                            <span><?php echo $fetch_organiza[0][8]; ?></span>
                        </div>
                        <div class="col-sm-6">
                        <h6>Telefone:</h6>
                            <span><?php echo $fetch_organiza[0][11]; ?></span>
                        </div>
                        <div class="col-sm-6">
                        <h6>Endereço:</h6>
                            <span><?php echo $fetch_organiza[0][9]; ?></span>
                        </div>
                    </div> 
                </form>
            </div>
        </div>
    </div>
</body>
<?php 
	include "footer.php";
?>
