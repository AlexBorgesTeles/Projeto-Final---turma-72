<?php
    include "conexao.php";
    session_start();
    $id = 'id_camisa';
    $select = "SELECT * FROM camisa WHERE id_camisa = {$id}";
    $info = mysqli_query($mysql, $select);
    $camisa = mysqli_fetch_assoc($info);
	#var_dump($camisa);
	$titlePage = "Finalizando sua compra!";
	include "cabecalho.php";
?>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <!--
                    Dados de entrega tem que estar no Banco de dados
                    Colocar cabecalho
                    Colocar a compra embaixo e o botao maior
                    Colocar subtotal na pagina dos dados da entrega
                -->
                <h2 class="mt-2 mb-3">Dados de entrega</h2>
                <div class="row">
                    <div class="col-8 mb-3">
                        <label for="nome" class="form-label">Nome Completo</label>
                        <input type="text" class="form-control" name="nome">
                    </div>
                    <div class="col-4 mb-3">
                        <label for="telefone" class="form-label">Número de Telefone</label>
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
                        <select id="estado" class="form-select mb-2" aria-label=".form-select-lg example">
                            <option value="" disabled selected></option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                            <option value="EX">Estrangeiro</option>
                        </select>
                    </div>
                    <div class="col-5 mb-3">
                        <label for="capital" class="form-label">Capital</label>
                        <input type="text" class="form-control" name="capital">
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="bairro" class="form-label">Bairro</label>
                        <input type="text" class="form-control" name="bairro">
                    </div>
                    <div class="col-8 mb-3">
                        <label for="endereco" class="form-label">Endereço</label>
                        <input type="text" class="form-control" name="endereco">
                    </div>
                </div>
                <div class="row">
                    <div class="col-2 mb-3">
                        <label for="numcasa" class="form-label">Número</label>
                        <input type="text" class="form-control" name="numcasa">
                    </div>
                    <div class="col mb-3">
                        <label for="complemento" class="form-label">Complemento</label>
                        <input type="text" class="form-control" name="complemento">
                    </div>
                </div>
                <div class="row">
                    <div class="col-2 mb-2">
                        <label for="entrega" class="form-label">Salvar como:</label>
                    </div>
                    <div class="col-8 mb-2" class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">Casa</label>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">Trabalho</label>
                    </div>
                    <div class="col mb-2 d-grid gap-2 d-md-flex justify-content-md">
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#pagar">Adicionar cartão</button>
                    </div>
                </div>

                <h2 class="mt-3">Compra a ser realizada</h2>
                <div class="row">
                    <div class="col mb-2" class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault"></label>
                    </div>
                    <div class="col">
                        <img src="../imagens/<?php echo $camisa['imagem'];?>" class="d-block w-100 mb-3 mt-2" alt="roupa" height: 2px;>
                    </div>
                    <div class="col">
                        <h4 class="mt-1"><?php echo $camisa['estampa']; ?></h4>
                    </div>
                </div>

                <div class="_1BehlF">
                    <div class="_-0yJ2-">
                        <div class="_1Z2fe1">
                            <div class="_3mceb9">
                                <a title="CONJUNTO CASAL CAMISA FEMININA + CAMISA MASCULINA SELEÇÃO BRASIL MODELO 2019" href="/CONJUNTO-CASAL-CAMISA-FEMININA-CAMISA-MASCULINA-SELEÇÃO-BRASIL-MODELO-2019-i.433707183.10860012280?xptdk=f0cc0455-2e1c-4897-a1aa-dfa81ec98cec">
                                    <div class="_25vezo" style="background-image: url(&quot;https://cf.shopee.com.br/file/bc141a9f1a94794e55ebaa5d307ae571_tn&quot;);"></div>
                                </a>
                                <div class="_1WfuBi">
                                    <a class="_3t5Sij" title="CONJUNTO CASAL CAMISA FEMININA + CAMISA MASCULINA SELEÇÃO BRASIL MODELO 2019" href="/CONJUNTO-CASAL-CAMISA-FEMININA-CAMISA-MASCULINA-SELEÇÃO-BRASIL-MODELO-2019-i.433707183.10860012280?xptdk=f0cc0455-2e1c-4897-a1aa-dfa81ec98cec">CONJUNTO CASAL CAMISA FEMININA + CAMISA MASCULINA SELEÇÃO BRASIL MODELO 2019</a>
                                    <div class="_2032rh">
                                        <span class="_1iZFYg i1lOZb">Encomenda</span>
                                    </div>
                                    <div class="_21GC7u" style="background-image: url(&quot;https://cf.shopee.com.br/file/d455451ecad00fd75d3fbc09cd2bce83&quot;);">
                                </div>
                                <div class="fRkQR_">
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="_34KJXV">
                        <div class="aUj6f2">
                            <div class="_1XT_GF" role="button" tabindex="0">
                                <div class="Qtk_DO">Variações:<button class="vZLqsj"></button>
                            </div>
                            <div class="_3dqm1i">P,G</div>
                        </div>
                        <div>
                    </div>
                </div></div>
                <div class="_1C6zuo">
                    <div>
                        <span class="_1E5-FE">R$239,99</span>
                    </div>
                </div>
                <div class="_2vZsK0">
                    <div class="_1knJ1D shopee-input-quantity">
                        <button class="_2rGMck">
                            <svg enable-background="new 0 0 10 10" viewBox="0 0 10 10" x="0" y="0" class="shopee-svg-icon">
                                <polygon points="4.5 4.5 3.5 4.5 0 4.5 0 5.5 3.5 5.5 4.5 5.5 10 5.5 10 4.5"></polygon>
                            </svg>
                        </button>
                        <input class="_2rGMck _8rdz59" type="text" role="spinbutton" aria-valuenow="1" value="1">
                        <button class="_2rGMck">
                            <svg enable-background="new 0 0 10 10" viewBox="0 0 10 10" x="0" y="0" class="shopee-svg-icon icon-plus-sign">
                                <polygon points="10 4.5 5.5 4.5 5.5 0 4.5 0 4.5 4.5 0 4.5 0 5.5 4.5 5.5 4.5 10 5.5 10 5.5 5.5 10 5.5"></polygon>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="_2S6DJl">
                    <span>R$239,99</span>
                </div>
                </div></div>
                
                <a class="btn btn-success mt-3" href="checkout.php" role="button">Fazer pedido</a>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="pagar" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: gray;">Cartão de crédito/débito</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <p>Informações do cartão</p>
                        <div class="form-floating mt-2 mb-3 ps-1" style="color: gray;">
                            <input type="text" class="form-control" id="ncartao" placeholder="number">
                            <label for="ncartao">Número do cartão</label>
                        </div>
                        <div class="form-floating mt-2 mb-3 ps-1" style="color: gray;">
                            <input type="text" class="form-control" id="vencimento" placeholder="number">
                            <label for="vencimento">Data de expiração</label>
                        </div>
                        <div class="form-floating mt-2 mb-3 ps-1" style="color: gray;">
                            <input type="text" class="form-control" id="cvv" placeholder="number">
                            <label for="cvv">CVV</label>
                        </div>
                        <div class="form-floating mb-3 ps-1" style="color: gray;">
                            <input type="text" class="form-control" id="nomecartao" placeholder="text">
                            <label for="nomecartao">Nome no cartão</label>
                        </div>
                        <p>Dados da cobrança</p>
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
    </div>

<?php
    include "../modelos/footer.php"
?>