<?php
    session_start();
	include "conexao.php";
	$titlePage = "Costumizar Conta";
	include "cabecalho.php";

    //var_dump($_SESSION['user_id']);
    if(isset($_SESSION['id_usuario']) and $_SESSION['id_usuario'] != ''){
        $sql_conta= "SELECT * FROM `usuario` JOIN `pessoa` ON `id_pessoa` = `fk_id_pessoa` WHERE `fk_id_pessoa` = {$_SESSION['user_id']};";
        $query_envia= mysqli_query($mysql,$sql_conta);
        $fetch_organiza = mysqli_fetch_assoc($query_envia);
        $senha02 = base64_decode($fetch_organiza['senha']);
		#encode(senha) == senha do banco
		#digite a senha antiga
		#digite a senha nova
		# na hora de salvar salve encode(senhanova)

 
        if(isset($senha02) and $senha02 != ''){
			//UPDATE
            $sqlusuario = "update `usuario` set ...')";
            $senha = base64_encode($_POST['senha']);
            $last_id = mysqli_insert_id($mysql);
		    $query = mysqli_query($mysql,$sqlusuario);
        }
    }else{
        header('location: home.php');
    }
    //echo "<pre>";
    //var_dump($fetch_organiza);
    //echo "</pre>";
?>
<body>
    <div class="container">
        <div class="row">
        <?php 
                include 'admmenu.php';
            ?>
            <div class="col-10">
                <span class="text center-align "><h4><b>ALTERANDO INFORMAÇÕES:</b></h4></span>
                <form method="post" action="costumizaconta.php">
                    <div class="row flex">
                        <div class="col-6">
                            <!----Email--->
                            <label for="estampa">Atualizar Email:</label>
                            <input type="text" class="form-control" placeholder="email..." id="email" value="<?php echo $fetch_organiza['email']?>" name="email" required>
                        </div>
                        <div class="col-6">
                            <!----Senha
							Adicionar: senha antiga
							--->
                            <label for="marca">Trocar Senha:</label>
                            <input type="texto" class="form-control" name="senha" id="senha" value="<?php echo $senha02?>" required>
                        </div>
                    </div>
                        <div class="row">
                        <div class="col-4 mb-3">
                            <!----Endereço--->
                            <label for="avaliação">Atualizar endereço:</label>
                            <input type="text" class="form-control" placeholder="endereço..." id="endereço" value="<?php echo $fetch_organiza['endereco']?>" name="endereço" required>
                        </div>
                        <div class="col-6 mb-3">
                            <!----Telefone--->
                            <label for="imagem">Altualiza telefone:</label>
                            <input type="text" class="form-control" name="telefone" id="telefone" value="<?php echo $fetch_organiza['telefone']?>" required>
                            <input type="hidden" name="telefone" id="telefone" value="<?php echo $fetch_organiza['telefone']?>">
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