<?php
    session_start();
	include "conexao.php";
	$titlePage = "Costumizar Conta";
	include "cabecalho.php";

    if(isset($_SESSION['user_id']) and $_SESSION['user_id'] != ''){
        $sql_conta="SELECT * FROM `usuario` JOIN `pessoa` ON `id_pessoa` = `fk_id_pessoa`;";
        $query_envia= mysqli_query($mysql,$sql_conta);
        $fetch_organiza = mysqli_fetch_assoc($query_envia);
    }else{
        //header('location: home.php');
    }
    echo "<pre>";
    var_dump($fetch_organiza);
    echo "</pre>";
?>
<body>
    <div class="container">
        <div class="row">
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
                <span class="text center-align "><h4><b>ALTERANDO INFORMAÇÕES:</b></h4></span>
                <form method="post" action="costumizar.php">
                    <div class="row flex">
                        <div class="col-6">
                            <!----Email--->
                            <label for="estampa">Atualizar Email:</label>
                            <input type="text" class="form-control" placeholder="email..." id="email" value="<?php echo $fetch_02['email']?>" name="email" required>
                        </div>
                        <div class="col-6">
                            <!----Senha--->
                            <label for="marca">Trocar senha:</label>
                            <input type="password" class="form-control" name="senha" id="senha" value="<?php echo $fetch_02['senha']?>" required>
                        </div>
                    </div>
                        <div class="row">
                        <div class="col-4 mb-3">
                            <!----Endereço--->
                            <label for="avaliação">Atualizar endereço:</label>
                            <input type="text" class="form-control" placeholder="endereço..." id="endereço" value="<?php echo $fetch_02['endereço']?>" name="endereço" required>
                        </div>
                        <div class="col-6 mb-3">
                            <!----Telefone--->
                            <label for="imagem">Altualiza telefone:</label>
                            <input type="text" class="form-control" name="telefone" id="telefone" value="<?php echo $fetch_02['telefone']?>" required>
                            <input type="hidden" name="telefone" id="telefone" value="<?php echo $fetch_02['telefone']?>">
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-dark" > Atualizar</button>
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