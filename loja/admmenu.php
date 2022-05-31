<div class="d-flex flex-column col-2 flex-shrink-0 p-3 text-white bg-dark" style="width: 280;">
                <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <i class="bi bi-boxes"></i>
                    <span class="fs-4"> Opções</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">                    
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white">
                        <i class="bi bi-graph-up"> Relatórios</i>
                        </a>
                    </li>
                    <li>
                        <a href="admpagina.php" class="nav-link text-white">
                        <i class="bi bi-newspaper"> Informações da conta</i>
                        </a>
                    </li>
                    <li>
                        <a href="costumizaconta.php" class="nav-link text-white">
                            <i class="bi bi-wrench-adjustable-circle"> Customizar a conta</i>
                        </a>
                    </li>
                    <?php 
                        if(isset($_SESSION['nivel']) and $_SESSION['nivel'] == 1){
                            echo "<hr>
                            <li>
                                <a href='adicionarcamisa.php' class='nav-link text-white'>
                                    <i class='bi bi-plus-circle'></i> Adcionar Produtos</i>
                                </a>
                            </li>
                            <li>
                            <a href='tabelacamisa.php' class='nav-link text-white'>
                                    <i class='bi bi-scissors'></i> Alterar Produtos</i>
                                </a>
                            </li>";
                        }
                        var_dump($_SESSION['nivel']);
                    ?>
                </ul>
            </div>