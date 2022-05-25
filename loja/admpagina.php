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
	$fetch_organiza = mysqli_fetch_assoc($query_ler);
    echo $fetch_organiza['id_usuario'];
    //var_dump($fetch_organiza);
?>
<style>

</style>
<body>

    <div class="container">
        <div class="row ">
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
                        <a href="#" class="nav-link text-white">
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
            <div class="col-5">
                <h4 class="mb-3"><b>Informações do Administrador:</b></h4>
                    <div class="row g-3">
                        <div class="col-12">
                            <h5><b>Usuario:</b></h5>
                            <span><?php echo $fetch_organiza['email']; ?></span>
                        </div>
                        <div class="col-12">
                            <legend>
                                <h5><b>Nível de controle:</b></h5>
                            </legend>
                                <?php if($fetch_organiza['nivel'] == 1){
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
                            <h6><b>Nome Completo:</b></h6>
                            <span><?php echo $fetch_organiza['nome']; ?></span>
                        </div>
                        <div class = "col-sm-4">
                            <h6><b>Idade:</b></h6>
                            <span><?php echo $fetch_organiza['idade']." anos"; ?></span>
                        </div>
                        <div class = "col-sm-6">
                            <h6><b>CPF:</b></h6>
                            <span><?php echo $fetch_organiza['cpf']; ?></span>
                        </div>
                        <div class="col-sm-6">
                            <h6><b>RG:</b></h6>
                            <span><?php echo $fetch_organiza['rg']; ?></span>
                        </div>
                        <div class="col-sm-6">
                        <h6><b>Telefone:</b></h6>
                            <span><?php echo $fetch_organiza['telefone']; ?></span>
                        </div>
                        <div class="col-sm-6">
                        <h6><b>Endereço:</b></h6>
                            <span><?php echo $fetch_organiza['endereco']; ?></span>
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
