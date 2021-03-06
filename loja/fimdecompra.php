<?php
    session_start();
	if(!isset($_SESSION['user_id']) or $_SESSION['user_id'] == null){
		header("Location: login.php?erro=34");
	}
	include "conexao.php";
    if (isset($_SESSION["user_id"]) and $_SESSION["user_id"] != ""){
        $consulta = "SELECT * FROM pessoa WHERE id_pessoa = ". $_SESSION["user_id"];
        $busca = mysqli_query($mysql, $consulta);
        $pessoa = mysqli_fetch_assoc($busca);
        $nome = $pessoa["nome"];
    }
    #var_dump($_SESSION);
    include "conexao.php";
    $id = $_GET['id_carrinho'];
    $select = "SELECT * FROM `carrinho` join estoque on estoque.id_estoque=carrinho.fk_id_estoque join camisa on camisa.id_camisa=estoque.fk_id_camisa where carrinho.id_carrinho={$id}"; #echo $select;
    $info = mysqli_query($mysql, $select);
    $camisa = mysqli_fetch_assoc($info);

    $selecionar = "SELECT * FROM pessoa WHERE id_pessoa = ".$_SESSION['user_id']; #echo $selecionar;
    $pegar = mysqli_query($mysql, $selecionar);
    $pessoa = mysqli_fetch_assoc($pegar);
	$titlePage = "Finalizando sua compra!";
	include "cabecalho.php";
?>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <!--
                    Dados de entrega tem que estar no Banco de dados ()
                    Ligar com a tabela PESSOA pra ter o nome e telefone ()
                    Colocar cabecalho ()
                    Colocar a compra embaixo e o botao maior ()
                    Colocar subtotal na pagina dos dados da entrega
                -->
                <h2 class="mt-2 mb-3">Dados de entrega</h2>
                <form action="dadosentrega.php?id_carrinho=<?= $id;?>" method="post">
                    <div class="row">
                        <div class="col-8 mb-3">
                            <label for="nome" class="form-label">Nome Completo</label>
                            <input type="text" class="form-control" name="nome">
                        </div>
                        <div class="col-4 mb-3">
                            <label for="telefone" class="form-label">N??mero de Telefone</label>
                            <input type="text" class="form-control" name="telefone">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 mb-3">
                            <label for="cep" class="form-label">CEP</label>
                            <input type="text" class="form-control" name="cep">
                        </div>
                        <div class="col-3 mb-3">
                            <label for="estado" class="form-label">Estado</label>
                            <select name="estado" class="form-select mb-2" aria-label=".form-select-lg example">
                                <option value="" disabled selected></option>
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amap??</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Cear??</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Esp??rito Santo</option>
                                <option value="GO">Goi??s</option>
                                <option value="MA">Maranh??o</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Par??</option>
                                <option value="PB">Para??ba</option>
                                <option value="PR">Paran??</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piau??</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rond??nia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">S??o Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                                <option value="EX">Estrangeiro</option>
                            </select>
                        </div>
                        <div class="col-5 mb-3">
                            <label for="cidade" class="form-label">Cidade</label>
                            <input type="text" class="form-control" name="cidade">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="bairro" class="form-label">Bairro</label>
                            <input type="text" class="form-control" name="bairro">
                        </div>
                        <div class="col-8 mb-3">
                            <label for="endereco" class="form-label">Endere??o</label>
                            <input type="text" class="form-control" name="endereco">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 mb-3">
                            <label for="numero" class="form-label">N??mero</label>
                            <input type="text" class="form-control" name="numero">
                        </div>
                        <div class="col mb-3">
                            <label for="complemento" class="form-label">Complemento</label>
                            <input type="text" class="form-control" name="complemento">
                        </div>
                    </div>
                    <?php
                  if(isset($_GET['error']) and $_GET['error']== 1){echo "<div class='alert alert-danger alert-dimissible fade show' role='danger'><h6>Voc?? n??o selecionou a quantidade que deseja ou o tamanho desejado!</h6><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";}
                  if(isset($_GET['sucess'])and $_GET['sucess'] == 2){echo "<div class='alert alert-success alert-dimissible fade show' role='success'>Dados inseridos com sucesso!<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";}
                  ?>
                               <div class="col-2 mb-2">
                                <button class='btn btn-success' type='submit'>inserir dados</button>
                               </div>

                        <!--<div class="col mb-2 d-grid gap-2 d-md-flex justify-content-md">
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#pagar">Adicionar cart??o</button>
                        </div>-->
                    </div>
                    <h2 class="mt-3">Compra a ser realizada</h2>
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <img src="../imagens/<?php echo $camisa['imagem'];?>" class="d-block mb-3 mt-2" alt="roupa" style="height: 130px";>
                                </div>
                                <div class="col">
                                    <span style="font-size: 20px;" class="mt-1"><?php echo $camisa['estampa']; ?></span>
                                </div>
                                <div class="col">
                                    <span style="font-size: 20px;" class="mt-1"><?php echo $camisa['tamanho']; ?></span>
                                </div>
                                <div class="col">
                                    <span style="font-size: 20px;" class="mt-1"><?php echo $camisa['quantidade']; ?></span>
                                </div>
                                <div class="col">
                                    <span style="font-size: 20px;">R$<?php echo $camisa['preco']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <a class="btn btn-success btn-lg mt-3" href="checkout.php?id_carrinho=<?php echo $camisa['id_carrinho']; ?>" role="button">Fazer pedido</a>
                </form>

            </div>
        </div>
    </div>
    <!-- Modal -->
    <!--
    <div class="modal fade" id="pagar" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: gray;">Cart??o de cr??dito/d??bito</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <p>Informa????es do cart??o</p>
                        <div class="form-floating mt-2 mb-3 ps-1" style="color: gray;">
                            <input type="text" class="form-control" id="ncartao" placeholder="number">
                            <label for="ncartao">N??mero do cart??o</label>
                        </div>
                        <div class="form-floating mt-2 mb-3 ps-1" style="color: gray;">
                            <input type="text" class="form-control" id="vencimento" placeholder="number">
                            <label for="vencimento">Data de expira????o</label>
                        </div>
                        <div class="form-floating mt-2 mb-3 ps-1" style="color: gray;">
                            <input type="text" class="form-control" id="cvv" placeholder="number">
                            <label for="cvv">CVV</label>
                        </div>
                        <div class="form-floating mb-3 ps-1" style="color: gray;">
                            <input type="text" class="form-control" id="nomecartao" placeholder="text">
                            <label for="nomecartao">Nome no cart??o</label>
                        </div>
                        <p>Dados da cobran??a</p>
                        <div class="form-floating mt-2 mb-2 ps-1" style="color: gray;">
                            <input type="email" class="form-control" id="email" placeholder="text">
                            <label for="email">E-mail</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Salvar</button>
                </div>
            </div>
        </div>
    </div>-->

<?php
    include "footer.php"
?>
