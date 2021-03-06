<?php
    include 'admteste.php';
    include "conexao.php";
    $titlePage = "Página de Edição";
    include "cabecalho.php";

    if(isset($_POST['id_camisa']) and $_POST['id_camisa'] != ""){
        $sql_update= "UPDATE `camisa` SET `estampa`='{$_POST['estampa']}',`marca`='{$_POST['marca']}',`imagem`='{$_POST['imagem']}',`descricao`='{$_POST['descricao-texto']}',`avaliacao`='{$_POST['avaliacao']}',`preco`='{$_POST['preco']}' WHERE id_camisa = {$_POST['id_camisa']} ";
        mysqli_query($mysql,$sql_update);
        header('Location: tabelacamisa.php');
        die();
    }


    if(isset($_GET['tabela_editar']) and $_GET['tabela_editar'] != ""){
        $id_tabela = $_GET['tabela_editar'];
        $sql ="SELECT * FROM `camisa` WHERE `id_camisa` = {$id_tabela}";
        $query_02 = mysqli_query($mysql,$sql);
        $fetch_02 = mysqli_fetch_assoc($query_02);
    }else{
        //header('Location: tabelacamisa.php');
        
    }
?>
<body>
    <div class="container">
        <div class="row">
            <?php 
                include 'admmenu.php';
            ?>
            <div class="col-10">
                <span class="text center-align "><h4><b>Coloque as modificações:</b></h4></span>
                <form method="post" action="editarcamisa.php">
                    <div class="row flex">
                        <div class="col-6">
                            <!----Estampa--->
                            <label for="estampa">Estampa:</label>
                            <input type="text" class="form-control" placeholder="Estampa..." id="estampa" value="<?php echo $fetch_02['estampa']?>" name="estampa" required>
                        </div>
                        <div class="col-6">
                            <!----Marca--->
                            <label for="marca">Marca:</label>
                            <input type="text" class="form-control" name="marca" id="marca" value="<?php echo $fetch_02['marca']?>" required>
                        </div>
                    </div>
                        <div class="row">
                        <div class="col-2 mb-3">
                            <!----Avaliação--->
                            <label for="avaliação">Avaliação:</label>
                            <input type="number" class="form-control" placeholder="0" id="avaliacao" name="avaliacao" value="<?php echo $fetch_02['avaliacao']?>" step="1" min="0" max="5" required>
                        </div>
                        <div class="col-7 mb-3">
                            <!----Imagem--->
                            <label for="imagem">Imagem:</label>
                            <input type="text" class="form-control" name="imagem" id="imagem" value="<?php echo $fetch_02['imagem']?>" required>
                            <input type="hidden" name="id_camisa" id="id_camisa" value="<?php echo $fetch_02['id_camisa']?>">
                        </div>
                        <div class="col-3 mb-3">
                            <!----Preço--->
                            <label for="preco">Preço:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">R$</span>
                                </div>
                                <input type="number" class="form-control" aral-label="Amount" placeholder="10.00" value="<?php echo $fetch_02['preco']?>" id="preco" name="preco" step="0,00" min="0,00" max="1.000,00" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <!----Descrição--->
                            <label for="descricao">Descrição:</label><br>
                            <textarea id="descricao" class="form-control" id="descricao" name="descricao-texto" rows="10" cols="30" wrap="hard"><?php echo $fetch_02['descricao']?> </textarea>
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