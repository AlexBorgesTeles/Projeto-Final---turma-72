<?php
	include "conexao.php";
	$titlePage = "Login";
	include "cabecalho.php";
	//adicionar usuario no cadastro
?>
    
        <div class="container">
         <div class="row justify-content-center">
           <div class="col-6">
            <h3 class="mt-5 text-center">Cadastro</h3>
            <form action="confirmacadastro.php" method="post" class="row">
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="text" class="form-control" name="email">
                    <label for="senha" class="form-label">Senha:</label>
                    <input type="text" class="form-control" name="senha">
                    <p id='result'>Nivel</p>
                    <select name="nivel" id="nivel">
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
     <?php
include "footer.php";
?>   