<?php
	include "conexao.php";
	$titlePage = "Login";
	include "cabecalho.php";
	//adicionar usuario no cadastro
?>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <h3 class="mt-5 text-center">Cadastro</h3>
                    <form action="confirmacadastro.php" method="post" class="row">
                        <div class="mb-3">
                            <!--Nome-->
                            <label for="nome01" class="form-label">Nome Completo:</label>
                            <input type="text" class="form-control" name="nome01" value='<?php if(isset($_GET['nome']) and $_GET['nome'] != ""){ echo $_GET['nome']; } ?>'>
                            <!--CPF-->
                            <label for="cpf01" class="form-label">CPF:</label>
                            <input type="varcha01" class="form-control" name="cpf01" value='<?php if(isset($_GET['cpf']) and $_GET['cpf'] != ""){ echo $_GET['cpf']; } ?>'>
                            <?php 
                                
                            ?>
                            <!--RG-->
                            <label for="rg01" class="form-label">RG:</label>
                            <input type="text" class="form-control" name="rg01" value='<?php if(isset($_GET['rg']) and $_GET['rg'] != ""){ echo $_GET['rg']; }?>'>
                            <?php
                                
                            ?>
                            <!--Endereço-->
                            <label for="endereco01" class="form-label">Endereço:</label>
                            <input type="text" class="form-control" name="endereco01" value='<?php if(isset($_GET['endereco']) and $_GET['endereco'] != ""){ echo $_GET['endereco'];}?>'>
            
                            <!--Idade-->
                            <label for="idade01" class="form-label">Idade:</label>
                            <input type="text" class="form-control" name="idade01" value='<?php if(isset($_GET['idade']) and $_GET['idade'] != ""){ echo $_GET['idade'];} ?>'>

                            <!--Telefone-->
                            <label for="telefonE01" class="form-label">Telefone:</label>
                            <input type="text" class="form-control" name="telefone01" value='<?php if(isset($_GET['telefone']) and $_GET['telefone'] != ""){ echo $_GET['telefone'];} ?>'>

                            <!--Email-->
                            <label for="email01" class="form-label">Email:</label>
                            <input type="email" class="form-control" name="email01" value='<?php if(isset($_GET['email']) and $_GET['email'] != ""){ echo $_GET['email'];} ?>'>

                            <!--Senha-->
                            <label for="senha01" class="form-label">Senha:</label>
                            <input type="password" class="form-control" name="senha01" value='<?php if(isset($_GET['senha']) and $_GET['senha'] != ""){ echo $_GET['senha'];} ?>'>
                            <?php
                                if(isset($_GET['falta'])){
                                 if($_GET['falta'] == 1){
                                    echo "
								<div class='alert mt-2 alert-warning alert-dismissible fade show' role='alert'>
								<strong>Nome em falta!</strong> É necessário escrever um nome.
								<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
					  			</div>";
                                }
                                if($_GET['falta'] == 2){
                                    echo "
								<div class='alert mt-2 alert-warning alert-dismissible fade show' role='alert'>
								<strong>CPF em falta!</strong> É necessário escrever um CPF.
								<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
					  			</div>";
                                }
                                if($_GET['falta'] == 3){
                                    echo "
								<div class='alert mt-2 alert-warning alert-dismissible fade show' role='alert'>
								<strong>RG em falta!</strong> É necessário escrever um RG.
								<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
					  			</div>";
                                }
                                if($_GET['falta'] == 5){
                                    echo "
								<div class='alert mt-2 alert-warning alert-dismissible fade show' role='alert'>
								<strong>Idade em falta!</strong> É necessário escrever a idade.
								<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
					  			</div>";
                                }
                                if($_GET['falta'] == 6){
                                    echo "
                                    <div class='alert mt-2 alert-warning alert-dismissible fade show' role='alert'>
                                    <strong>Telefone em falta!</strong> É necessário escrever um telefone.
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                    </div>";
                                }
                                if($_GET['falta'] == 9){
                                    echo "
								<div class='alert mt-2 alert-warning alert-dismissible fade show' role='alert'>
								<strong>Email já existe!</strong> Esse email já está logado no nosso sistema.
								<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
					  			</div>";
                                }
                                if($_GET['falta'] == 7){
                                    echo "
								<div class='alert mt-2 alert-warning alert-dismissible fade show' role='alert'>
								<strong>Email em falta!</strong> É necessário escrever um email.
								<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
					  			</div>";
                                }
                                if($_GET['falta'] == 8){
                                    echo "
								<div class='alert mt-2 alert-warning alert-dismissible fade show' role='alert'>
								<strong>Senha em falta!</strong> É necessário escrever um senha.
								<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
					  			</div>";
                                }
                            }
                                
                            ?>
                            <!--Nivel sempre cliente = 2-->
                            <input type="hidden" id="nivel02" name="nivel02" value="02">
                        </div>
                        
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>