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
    $select = "SELECT * FROM `carrinho` join estoque on estoque.id_estoque=carrinho.fk_id_estoque join camisa on camisa.id_camisa=estoque.fk_id_camisa where carrinho.id_carrinho={$id}";
    $info = mysqli_query($mysql, $select);
    $camisa = mysqli_fetch_assoc($info);
    $selecionar = "SELECT * FROM pessoa WHERE id_pessoa = ".$_SESSION['user_id']; #echo $selecionar;
    $pegar = mysqli_query($mysql, $selecionar);
    $pessoa = mysqli_fetch_assoc($pegar);
	$titlePage = "Pagamento";
	include "cabecalho.php";
?>
<body>
    <div class="container">
        <div class="row">
            <h3>Método de pagamento</h3>
            <div class="row">
                <div class="col flex items-center TvGNLb">
                    <button id="boleto" class="btn">Boleto Bancário</button>
                    <button id="pix" class="btn">Pix</button>
                </div>
            </div>

            <div class="">
             <?php $precosub= $camisa['preco'] * $camisa['quantidade']; if($precosub > 70){$frete= 15; $total = $precosub + $frete;}?>
                <div class="lhwDvd Exv9ow c5Dezq">Subtotal dos Produtos:</div>
                <div class="lhwDvd Uu2y3K c5Dezq"><?php echo "{$precosub}R$";?></div>
                <div class="lhwDvd Exv9ow B6k-vE">Frete: </div>
                <div class="lhwDvd Uu2y3K B6k-vE">R$15,00</div>
                <div class="lhwDvd Exv9ow B6k-vE">Frete grátis se for menos de 70.00R$: </div>
                <div class="lhwDvd Exv9ow A4gPS6">Pagamento Total:</div>
                <div class="lhwDvd +0tdvp Uu2y3K A4gPS6"><?php if($precosub > 70){$frete= 15; $total = $precosub + $frete; echo "{$total}R$";}else{if($precosub < 70){echo $precosub;}}?></div>
            </div>
            <a class="btn btn-lg" style="background-color: #529A4A" href="aguardandopagamento.php?id_camisa=<?php echo $camisa['id_camisa'];?>" role="button">Fazer pedido</a>
            
        </div>
    </div>
    <script type="text/javascript">
        let boleto = document.getElementById('boleto')
        let pix = document.getElementById('pix')
        let link = document.getElementById('link')
	    let htam = ''
        boleto.onclick = function(){
            console.log('Pagamento no boleto bancario')
            boleto.classList.add("btn-success");
            pix.classList.remove("btn-success");
        }
        pix.onclick = function(){
            console.log('Pagamento PIX')
            boleto.classList.remove("btn-success");
            pix.classList.add("btn-success");
        }
    </script>
<?php 
	include "footer.php";
?>
