<?php
    session_start();
	include "conexao.php";
	$titlePage = "Costumizar Conta";
	include "cabecalho.php";


    if(isset($_SESSION['id_usuario']) and $_SESSION['id_usuario'] != ''){
        $sql_conta= "SELECT * FROM `usuario` JOIN `pessoa` ON `id_pessoa` = `fk_id_pessoa` WHERE `fk_id_pessoa` = {$_SESSION['user_id']};";
        $query_envia= mysqli_query($mysql,$sql_conta);
        $fetch_organiza = mysqli_fetch_assoc($query_envia);
        $senha_traduz = base64_decode($fetch_organiza['senha']);
		#encode(senha) == senha do banco
		#digite a senha antiga
		#digite a senha nova
		# na hora de salvar salve encode(senhanova)

        //Se senha velha existir
        if(isset($_POST['senhaV'])){
            $senha_encode = base64_encode($_POST['senhaV']);
            //Se senha criptografada existir e for igual a senha da tabela
        if(isset($senha_encode) and $senha_encode == $fetch_organiza['senha']){
            $senha = base64_encode($_POST['senhaN']);
            $sqlusuario = "UPDATE `usuario` SET `senha`='{$senha}' WHERE id_usuario = {$_SESSION['id_usuario']}";
		    $query = mysqli_query($mysql,$sqlusuario);
        }
        }
        //Se email velho existir e for igual
        if(isset($_POST['emailV']) and $_POST['emailV'] == $fetch_organiza['email'] and $_POST['emailV'] != ''){
            $sqlusuario01 = "UPDATE `usuario` SET `email`='{$_POST['emailN']}' WHERE id_usuario = {$_SESSION['id_usuario']}";
            $query01 = mysqli_query($mysql,$sqlusuario01);
        }else{
            echo "<div class='alert alert-primary' role='alert'>
                    É preciso ter o email desatualizado escrito!
                    </div>";
        }
        if(isset($_POST['enderecoN']) and $_POST['enderecoN'] != ""){
            $sqlusuario02 = "UPDATE `pessoa` SET `endereco`='{$_POST['enderecoN']}' WHERE id_pessoa = {$_SESSION['user_id']}";
            $query02 = mysqli_query($mysql,$sqlusuario02);
        }
        if(isset($_POST['telefoneN']) and $_POST['telefoneN'] != ""){
            $sqlusuario03 = "UPDATE `pessoa` SET `telefone`='{$_POST['telefoneN']}' WHERE id_pessoa = {$_SESSION['user_id']}";
            $query03 = mysqli_query($mysql,$sqlusuario03);
        }
    }else{
        header('location: home.php');
    }
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
                            <label for="estampa">Email desatualizado:</label>
                            <input type="text" class="form-control" placeholder="email..." id="emailV" name="emailV" >
                            <label for="estampa">Email atualizado:</label>
                            <input type="text" class="form-control" placeholder="email..." id="emailN" name="emailN" >
                        </div>
                        <div class="col-6">
                            <!----Senha
							Adicionar: senha antiga
							--->
                            <label for="marca">Senha velha:</label>
                            <input type="texto" class="form-control" name="senhaV" id="senhaV" >
                            <label for="marca">Senha nova:</label>
                            <input type="texto" class="form-control" name="senhaN" id="senhaN" >
                        </div>
                    </div>
                        <div class="row">
                        <div class="col-4 mb-3">
                            <!----Endereço--->
                            <label for="avaliação">Atualizar endereço:</label>
                            <input type="text" class="form-control" placeholder="endereço..." value="<?php echo $fetch_organiza['endereco']?>" id="enderecoN" name="enderecoN" >
                        </div>
                        <div class="col-6 mb-3">
                            <!----Telefone--->
                            <label for="imagem">Altualiza telefone:</label>
                            <input type="text" class="form-control" name="telefoneN" id="telefoneN" value="<?php echo $fetch_organiza['telefone']?>" >
                            <input type="hidden" name="id_pessoa" id="id_pessoa" value="<?php echo $_SESSION['user_id']?>">
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