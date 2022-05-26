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
                            <label for="nome" class="form-label">Nome Completo:</label>
                            <input type="text" class="form-control" name="nome">
                            <label for="cpf" class="form-label">CPF:</label>
                            <input type="varchar" class="form-control" name="cpf">
                            <label for="rg" class="form-label">RG:</label>
                            <input type="text" class="form-control" name="rg">
                            <label for="endereco" class="form-label">Endereço:</label>
                            <input type="text" class="form-control" name="endereco">
                            <label for="idade" class="form-label">Idade:</label>
                            <input type="text" class="form-control" name="idade">
                            <label for="telefone" class="form-label">Telefone:</label>
                            <input type="text" class="form-control" name="telefone">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" name="email">
                            <label for="senha" class="form-label">Senha:</label>
                            <input type="password" class="form-control" name="senha">
                            <p id='result'>Nivel</p>
                            <select name="camisa" id="camisa">
                                <option></option>
                                <option value='1'>Cliente</option>
                            </select>
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