<?php
	include "conexao.php";
?>
<!DOCTYPE HTML>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Pagamento</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <!-- <link rel="icon" type="image/png" href="icones/fofo.png"> -->
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="checkout-payment-method-view__current checkout-payment-setting">
                <div class="checkout-payment-method-view__current-title">Método de pagamento</div>
                    <div class="checkout-payment-setting__payment-methods-tab">
                        <span tabindex="0"><button class="product-variation product-variation--disabled" aria-label="Cartão De Crédito" aria-disabled="true">Cartão De Crédito</button></span>
                        <span tabindex="0"><button class="product-variation" aria-label="Boleto Bancário" aria-disabled="false">Boleto Bancário</button></span>
                        <span tabindex="0"><button class="product-variation" aria-label="Pix" aria-disabled="false">Pix</button></span>
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
<?php 
	include "footer.php";
?>