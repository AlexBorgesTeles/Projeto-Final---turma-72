<?php
    include "conexao.php";
	$titlePage = 'Login';
    include "cabecalho.php";
?>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-6 ">
				<h3 class="mt-5 text-center">Login</h3>
				<form action="confirmalogin.php" method="post" class="row">
					<div class="mb-3">
						<label for="email" class="form-label">Email:</label>
						<input type="text" class="form-control" name="email">
						<label for="senha" class="form-label">Senha:</label>
						<input type="text" class="form-control" name="senha">
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
