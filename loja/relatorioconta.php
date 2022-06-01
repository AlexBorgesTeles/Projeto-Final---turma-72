<?php
    session_start();
	include "conexao.php";
	$titlePage = "Página a Conta";
	include "cabecalho.php";
    ?>
    <body>
        <div class='container'>
            <div class='row'>
                <?php 
                    include 'admmenu.php';
                ?>
                <div class='col-10'>
                    <div class='white-card'>
                        <div class='white-card-header'>
                            <div class='main-title'>
                                <h3>Histórico de compra:</h3>
                            </div>
                            <div class='white_card_body'>
                                <div class='todo_wrapper'>
                                    <div class='todo_head'>
                                        <h5>Aqui vai ficar a camsia comprada!</h5>
                                        <p>data e Status
                                        
<?php
$str = 'This is an encoded string';
echo base64_encode($str);
$str02 = base64_encode($str);
echo base64_decode($str02);
?>
</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
<?php
    include 'footer.php';
?>