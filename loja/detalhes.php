<?php
	include "conexao.php";
    session_start();
    $id = $_GET['id_camisa'];
    $select = "SELECT * FROM camisa JOIN estoque ON camisa.id_camisa = estoque.fk_id_camisa WHERE id_camisa = {$id}";
    $info = mysqli_query($mysql, $select);
    $camisa = mysqli_fetch_assoc($info);
	var_dump($camisa);
	$titlePage = $camisa['estampa'];
	include "cabecalho.php";
?>
<!--
    Preco e avaliacoes na mesma linha
    Todos na mesma linha
    Muda a ordem do preco
    Separa o menu da compra
-->

<div class="container">
    <div class="row">
        <div class="col-4">
            <img src="../imagens/<?php echo $camisa['imagem'];?>" class="d-block w-100 mb-3 mt-2" alt="casal vestidos na camisa" height: 60px;>
            <div>
                <span>Compartilhe:</span>
                    <a class="bi bi-messenger" href="https://www.messenger.com/" role="button" style="color:deepskyblue;"></a>
                    <a class="bi bi-facebook" href="https://www.facebook.com/" role="button" style="color:blue;"></a>
                    <a class="bi bi-pinterest" href="https://br.pinterest.com/" role="button" style="color:red;"></a>
                    <a class="bi bi-twitter" href="https://twitter.com/" role="button" style="color:dodgerblue;"></a>
                    <a class="bi bi-whatsapp" href="#" role="button" style="color:rgb(23, 185, 23);"></a>
                    <a class="bi bi-telegram" href="#" role="button" style="color:rgb(45, 45, 221);"></a><br>
                    <a class="bi bi-heart" href="#" role="button" style="color:rgb(255, 32, 32);"></a>
                    <a href="#" role="button" style="color:black;">Favoritar (587)</a>
            </div>
        </div>

        <div class="col-8">
            <h4 class="mt-1"><?php echo $camisa['estampa']; ?></h4> 
            <div class="row">
                <div class="col-5">
                    <p style="padding-top: 0.5rem;"><?php for($i=1;$i<=$camisa['avaliacao']; $i++){
                        echo "<i class=' text-warning bi bi-star-fill'></i>";
                    }?> | 8 avaliações | 500 vendidas<p>
                </div>
                <div class="col">
                    <h2 style="color: orange;">R$<?php echo $camisa['preco']; ?></h2>
                </div>
            </div>
            
            <div class="row">
                <div class="col-4 mt-4" style="color: gray;">
                    <span>Frete</span>
                </div>
                <div class="col-8 mt-4">
                    <i class="bi bi-calendar-check" style="color: red;"></i> <span style="color: red;">Encomenda (envio em 30 dias)</span><br>
                    <i class="bi bi-truck" style="color: green;"></i>
                    <span>Frete grátis com cupom<span><br>
                    <span style="margin-left: 20px; color: gray;">Para compras acima de R$29,00</span>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-4" style="color: gray;">
                    <p>TAMANHO MASCULINA</p>
                </div>
                <div class="col-8 flex items-center TvGNLb">
                    <button class="btn third">P</button>
                    <button class="btn third">M</button>
                    <button class="btn third">G</button>
                    <button class="btn third">GG</button>
                </div>
            </div>
                   
            <div class="row mb-3">
                <div class="col-4" style="color: gray;">
                    <p>TAMANHO FEMININA</p>
                </div>
                <div class="col-8 flex items-center TvGNLb">
                <button class="btn third">P</button>
                <button class="btn third">M</button>
                <button class="btn third">G</button>
                <button class="btn third">GG</button>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-4" style="color: gray;">
                    <label for="quant" class="form-label">Quantidade</label>
                </div>
                <div class="col-2">
                    <input type="number" class="form-control" name="quant">
                </div>
                <div class="col-4">
                    <span><?php echo $camisa['quantidade_e']; ?> unidades disponíveis</span>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col" style="padding-left: 33px;">
                    <a class="btn btn-outline-danger btn-lg" href="insertcarrinho.php?id_camisa= <?php $camisa['id_camisa']; ?>" role="button"><i class="bi bi-cart-plus"></i>Adicionar ao carrinho</a>
                </div>
                <div class="col">
                    <?php echo" <a href='fimdecompra.php?id_camisa=$camisa[id_camisa]' class='btn btn-dark btn-lg'>Comprar agora</a>"; ?>
                </div>
            </div>
        </div>

    </div>
</div>
<?php 
	include "footer.php";
?>
