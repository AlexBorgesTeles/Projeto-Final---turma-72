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
    $id = $_GET['id_camisa'];
    $select = "SELECT * FROM camisa JOIN estoque ON camisa.id_camisa = estoque.fk_id_camisa WHERE id_camisa = {$id}"; #echo $select;
    $info = mysqli_query($mysql, $select);
    $camisa = mysqli_fetch_assoc($info);

    $selecionar = "SELECT * FROM pessoa WHERE id_pessoa = ".$_SESSION['user_id']; #echo $selecionar;
    $pegar = mysqli_query($mysql, $selecionar);
    $pessoa = mysqli_fetch_assoc($pegar);
	$titlePage = "Pagamento";
	include "cabecalho.php";
    include "dadosentrega.php";
?>
<body>
    <div class="container">
        <div class="row">
            <h3>Método de pagamento</h3>
            <div class="row">
                <div class="col flex items-center TvGNLb">
                    <button id="cartao" class="btn">Cartão De Crédito</button>
                    <button id="boleto" class="btn">Boleto Bancário</button>
                    <button id="pix" class="btn">Pix</button>
                </div>
            </div>
            
            </div>
            <div class="checkout-payment-setting__payment-method-options"></div>
                <div class="KqH1Px">
                    <div class="lhwDvd Exv9ow c5Dezq">Subtotal dos Produtos:</div>
                </div>
                <div class="lhwDvd Uu2y3K c5Dezq">R$22,98</div>
                <div class="lhwDvd Exv9ow B6k-vE">Total de envio:</div>
                <div class="lhwDvd Uu2y3K B6k-vE">R$15,61</div>
                <div class="lhwDvd Exv9ow A4gPS6">Pagamento Total:</div>
                <div class="lhwDvd +0tdvp Uu2y3K A4gPS6">R$38,59</div>
                <div class="Ql2fz0"><div class="FXKjae"></div><button class="stardust-button stardust-button--primary stardust-button--large gG-FcK">Fazer pedido</button></div>
            </div>
            
        </div>
    </div>
    <script type="text/javascript">
        let cartao = document.getElementById('cartao')
        let boleto = document.getElementById('boleto')
        let pix = document.getElementById('pix')
        let htam = ''
        p.onclick = function(){
            console.log('Pagamento no cartao de credito')
            cartao.classList.add("btn-dark");
            boleto.classList.remove("btn-dark");
            pix.classList.remove("btn-dark");
            console.log('mudou')
            htam = p.innerHTML
        }
        m.onclick = function(){
            console.log('Pagamento no boleto bancario')
            cartao.classList.remove("btn-dark");
            boleto.classList.add("btn-dark");
            pix.classList.remove("btn-dark");
            console.log('mudou')
            htam = m.innerHTML
        }
        g.onclick = function(){
            console.log('Pagamento PIX')
            cartao.classList.remove("btn-dark");
            boleto.classList.remove("btn-dark");
            pix.classList.add("btn-dark");
            console.log(g.innerHTML)
            console.log('mudou')
            htam = g.innerHTML
        }
</script>
<?php 
	include "footer.php";
?>