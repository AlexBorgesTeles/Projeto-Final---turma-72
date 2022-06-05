<?php
    session_start();
    if (isset($_SESSION["user_id"]) and $_SESSION["user_id"] == ""){
        header('Location: login.php?usuarionaolocalizado=4');
    }
	include "conexao.php";
    if (isset($_SESSION["user_id"]) and $_SESSION["user_id"] != ""){
        $consulta = "SELECT * FROM pessoa WHERE id_pessoa = ". $_SESSION["user_id"];
        $busca = mysqli_query($mysql, $consulta);
        $pessoa = mysqli_fetch_assoc($busca);
        $nome = $pessoa["nome"];
    }
    $id = $_GET['id_camisa'];
    $select = "SELECT * FROM camisa JOIN estoque ON camisa.id_camisa = estoque.fk_id_camisa WHERE id_camisa = {$id}";
    $info = mysqli_query($mysql, $select);
    $camisa = mysqli_fetch_assoc($info);
    #var_dump($camisa);
    #var_dump($camisa['id_camisa']);
	$titlePage = $camisa['estampa'];
    include "cabecalho.php";

    $tam = "SELECT * FROM estoque WHERE fk_id_camisa = {$id} and tamanho = 'P' ";
    $tama = "SELECT * FROM estoque WHERE fk_id_camisa = {$id} and tamanho = 'M'";
    $taman = "SELECT * FROM estoque WHERE fk_id_camisa = {$id} and tamanho = 'G'";
    $tamanho = "SELECT * FROM estoque WHERE fk_id_camisa = {$id} and tamanho = 'GG'";
?>
<!--
    Preco e avaliacoes na mesma linha ()
    Todos alinhados()
    Muda a ordem do preco ()
    Separa o menu da compra ()
-->
<!--
    so mostar o tamanho da camisa do banco de dados
    Adiciona uma classe quando a pessoa clica no botao ()
    Remove a classe quando outro botao for clicado ()
    Se clicar em P por exemplo, fica preto ()
    Remover as classes dos botoes nao selecionados ()
-->
<div class="container">
    <?php 
        if(isset($_GET['error']) and $_GET['error'] == 1){
            echo "<div class='alert alert-danger alert-dimissible fade show' role='danger'><h6>Você não selecionou a quantidade que deseja ou o tamanho desejado!</h6><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
        }
    ?>
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
            </div>
        </div>
        <div class="col-8">
            <h4 class="mt-1"><?php echo $camisa['estampa']; ?></h4> 
            <div class="row">
                <div class="col-5">
                    <p style="padding-top: 0.5rem;">
                    <?php for($i=1;$i<=$camisa['avaliacao']; $i++){
                        echo "<i class=' text-warning bi bi-star-fill'></i>";}
                    ?> | 27 avaliações | 504 vendidas<p>
                </div>
                <div class="col">
                    <h2 style="color: orange;">R$<?php echo $camisa['preco'];?> </h2>
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
                    <span style="margin-left: 20px; color: gray;">Para compras acima de R$69,90</span>
                </div>
            </div>
	        <div class="row mt-1 mb-2">
                <div class="col-4" style="color: gray;">
                    <p>TAMANHO</p>
                </div>
                <div class="col-8 flex items-center">
                    <button id='P' class='btn'>P</button>
                    <button id='M' class='btn'>M</button>
                    <button id='G' class='btn'>G</button>
                    <button id='GG' class='btn'>GG</button>
                </div>
		    </div>
            <div class="row mt-2 mb-3">
                <div class="col-4" style="color: gray;">
                    <label for="quantidade" class="form-label">Quantidade</label>
                </div>
                <div class="col-2">
                    <input id="quantidade" type="number" class="form-control" name="quantidade" min="1" max="<?php echo $camisa['quantidade_e']; ?>">
                </div>
                <div class="col-4">
                    <span><?php echo $camisa['quantidade_e']; ?> unidades disponíveis</span>
                </div>
			</div>
            <div class="row mt-2">
                <div class="col" style="padding-left: 33px;">
                    <a id="link" class="btn btn-outline-success btn-lg" href="insertcarrinho.php?id_camisa=<?=$_GET['id_camisa']?>&id_estoque=<?php echo $camisa['id_estoque']; ?>" role="button"><i class="bi bi-cart-plus"></i>Adicionar ao carrinho</a>
                </div>
                <!--<div class="col">
                    <a class="btn btn-dark btn-lg" href="fimdecompra.php?id_camisa=<?php echo $camisa['id_camisa']; ?>" role="button"><i class="bi bi-cart-plus"></i>Comprar agora</a>
                </div>-->
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
	let p = document.getElementById('P')
	let m = document.getElementById('M')
    let g = document.getElementById('G')
    let gg = document.getElementById('GG')
	let quantidade = document.getElementById('quantidade')
	let link = document.getElementById('link')
	let hlink = link.href
	let htam = ''
	p.onclick = function(){
		console.log('clicou em P')
		p.classList.add("btn-dark");
		m.classList.remove("btn-dark");
		g.classList.remove("btn-dark");
		gg.classList.remove("btn-dark");
		link.href = hlink+"&quantidade="+quantidade.value+"&tam="+p.innerHTML
		htam = p.innerHTML
    }
    m.onclick = function(){
		console.log('clicou em M')
        p.classList.remove("btn-dark");
		m.classList.add("btn-dark");
		g.classList.remove("btn-dark");
		gg.classList.remove("btn-dark");
        console.log(m.innerHTML)
		console.log('mudou')
		link.href = hlink+"&quantidade="+quantidade.value+"&tam="+m.innerHTML
		htam = m.innerHTML
    }
    g.onclick = function(){
		console.log('clicou em G')
        p.classList.remove("btn-dark");
		m.classList.remove("btn-dark");
		g.classList.add("btn-dark");
		gg.classList.remove("btn-dark");
        console.log(g.innerHTML)
		console.log('mudou')
		link.href = hlink+"&quantidade="+quantidade.value+"&tam="+g.innerHTML
		htam = g.innerHTML
	}
    gg.onclick = function(){
		console.log('clicou em GG')
        p.classList.remove("btn-dark");
		m.classList.remove("btn-dark");
		g.classList.remove("btn-dark");
		gg.classList.add("btn-dark");
        console.log(gg.innerHTML)
        link.href = hlink+"&quantidade="+quantidade.value+"&tam="+gg.innerHTML
		htam = gg.innerHTML
	}
    quantidade.onchange = function(){
		console.log('mudou')
		link.href = hlink+"&quantidade="+quantidade.value+"&tam="+htam
	}
</script>
<?php 
	include "footer.php";
?>
