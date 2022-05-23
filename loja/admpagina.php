<?php
    session_start();
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
    .f-verde{
        background-color: #65785C;
        padding: -3px;
    }
</style>
<body>

    <div class="container">
        <div class="row">
            <div class="d-flex flex-column col-2 flex-shrink-0 p-3 text-white bg-dark" style="width: 280;">
                <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <i class="bi bi-briefcase"></i>
                    <svg class="bime-2" width="40" height="32">
                        <use xlink:href="home.php"></use>
                    </svg>
                    <span class="fs-4">Funções Dispóniveis</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <a class="nav-link" href="#" aria-current="page">
                        <i class="bi bi-alarm text-white"> Histórico</i>
                    </a>
                </ul>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#" aria-current="page">
                            <i class="bi bi-boxes text-white"> Produtos</i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" aria-current="page">
                        <i class="bi bi-graph-up text-white"> Relatório</i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" aria-current="page">
                            <i class="bi bi-gear text-white"> Custominação</i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-5 f-verde">
                <hr>
                <a class="btn btn-dark"><h5 class="mb-3 text-white">Informações do Administrador:</h5></a>
                <hr>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <h6><b>Usuario:</b></h6>
                            <p><?php echo $fetch_organiza[$_SESSION['user_id']][6]; ?></p>
                        </div>
                        <div class="col-sm-6">
                            <h6><b>Senha Registrada:</b></h6>
                            <p><?php echo $fetch_organiza[0][2]; ?></p>
                        </div>
                        <div class="col-12">
                            <h6><b>Email registrado:</b></h6>
                            <p><?php echo $fetch_organiza[0][1]; ?></p>
                        </div>
                        <div class="col-6">
                            <legend>
                                <span><b>Nível de controle:</b></span>
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
            <div class="col-4 f-verde" >
                <hr>
                <form>
                    <div class="row g-3" >
                        <div class = "col-sm-8 f-verde">
                            <h6 ><b>Nome Completo:</b></h6>
                            <span><?php echo $fetch_organiza[0][6]; ?></span>
                        </div>
                        <div class = "col-sm-4 f-verde">
                            <h6><b>Idade:</b></h6>
                            <span><?php echo $fetch_organiza[0][10]." anos"; ?></span>
                        </div>
                        <div class = "col-sm-6 f-verde">
                            <h6><b>CPF:</b></h6>
                            <span><?php echo $fetch_organiza[0][7]; ?></span>
                        </div>
                        <div class="col-sm-6 f-verde">
                            <h6><b>RG:</b></h6>
                            <span><?php echo $fetch_organiza[0][8]; ?></span>
                        </div>
                        <div class="col-sm-6 f-verde">
                        <h6><b>Telefone:</b></h6>
                            <span><?php echo $fetch_organiza[0][11]; ?></span>
                        </div>
                        <div class="col-sm-6 f-verde">
                        <h6><b>Endereço:</b></h6>
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
