<?php
	include "conexao.php";
	$titlePage = "Página Interna ADM";
	include "cabecalho.php";

    $sql_seleciona= "SELECT `id_pessoa`,`nome`,`cpf`,`rg`,`endereco`,`idade`,`telefone` FROM pessoa;";
    #$sql_seleciona= "SELECT `id_pessoa`,`nome`,`cpf`,`rg`,`endereco` FROM pessoa;";
    #$sql_seleciona="SELECT `id_usuario`,`email`,`senha`,`nivel`,`fk_id_pessoa` FROM usuario;";
   $query_ler = mysqli_query($mysql,$sql_seleciona);
   $fetch_organiza = mysqli_fetch_all($query_ler);
   #echo "<pre>";
   #var_dump($fetch_organiza);
   #echo "</pre>";
?>
<body>
    <div class="container">
        <div class="row">
        <h4 class="mb-3">Informações Usuário Administrador:</h4>
            <div class="col-6">
                <form>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="nome_de_usuario" class="form-label">Usuario:</label>
                            <input type="text" class="form-control" id="usuario" placeholder="Usuario Logado">
                        </div>
                        <div class="col-sm-6">
                            <label for="senha" class="form-label">Senha Registrada:</label>
                            <input type="text" class="form-control" id="senha_usuario" placeholder="Senha Registrada">
                        </div>
                        <div class="col-12">
                            <label for="email_usuario" class="form-label">Email registrado:</label>
                            <input type="email" class="form-control" id="email_usuario" placeholder="Email do Usuario">
                        </div>
                        <div class="col-6">
                            <fieldset>
                                <legend>
                                    <label for="Nível" class="form-label">Nível de Controle: </label>
                                </legend>
                                <div>
                                    <input type="checkbox" id="Adm" name="Administrador" checked>
                                    <label for="ADM">Administrador</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="cliente" name="Cliente">
                                    <label for="cliente">Cliente</label>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-6" >
                <form>
                    <div class="row g-3">
                        <div class = "col-sm-8">
                            <label for="nome_pessoa" class="form-label">Nome Completo:</label>
                            <input type="text" class="form-control" id="nome_pessoa" placeholder='<?php echo $fetch_organiza[0][1];?>'>
                        </div>
                        <div class="col-sm-4">
                            <label for="idade_pessoa" class="form-label">Idade:</label>
                            <input type="number" class="form-control" id="idade_pessoa" placeholder='<?php echo $fetch_organiza[0][5];?>'>
                        </div>
                        <div class = "col-sm-6">
                            <label for="CPF" class="form-label">RG:</label>
                            <input type="text" class="form-control" id="rg_pessoa" placeholder='<?php echo $fetch_organiza[0][2];?>'>
                        </div>
                        <div class="col-sm-6">
                            <label for="rg_pessoa" class="form-label">Idade:</label>
                            <input type="number" class="form-control" id="rg_pessoa" placeholder='<?php echo $fetch_organiza[0][5];?>'>
                        </div>
                        <div class="col-sm-12">
                            <label for="endereco_pessoa" class="form-label">Endereço:</label>
                            <input type="text" class="form-control" id="endereco_pessoa" placeholder='<?php echo $fetch_organiza[0][4];?>'>
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