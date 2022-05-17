<?php
    include "conexao.php";
    include "cabecalho.php";
?>
     <div class="container">
        <h3 class="mt-5 text-center">Cadastro</h3>
        <form action="confirmaregistro.php" method="post" class="row">
            <div class="mb-3">
				<label for="nome" class="form-label">Nome:</label>
				<input type="text" class="form-control" name="nome">
				<label for="email" class="form-label">Email:</label>
				<input type="text" class="form-control" name="email">
				<label for="cpf" class="form-label">CPF:</label>
				<input type="text" class="form-control" name="cpf">
				<label for="ender" class="form-label">Endereço:</label>
				<input type="text" class="form-control" name="ender">
				<label for="telef" class="form-label">Telefone:</label>
				<input type="text" class="form-control" name="tel">
				<label for="senha" class="form-label">Senha:</label>
				<input type="text" class="form-control" name="senha">
            </div>
             <div class="d-grid gap-2">
  
 <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      
  </div>
	<?php
		include "footer.php";
	?>