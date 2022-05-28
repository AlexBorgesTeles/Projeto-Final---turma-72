<?php
    include "conexao.php";
	$titlePage = 'Login';
    include "cabecalho.php";
    if(isset($_GET['carrinho']) and $_GET['carrinho'] ==1 ){echo "<div class='alert alert-danger alert-dimissible fade show' role='danger'><h6>Você não pode acessar o carrinho pois você não está logado!Logue-se e você terá acesso ao carrrinho!</h6><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";}
?>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-6 ">
				<h3 class="mt-5 text-center">Login</h3>
				<form action="confirmalogin.php" method="post" class="row">
					<div class="mb-3">
						<label for="email" class="form-label">Email:</label>
						<input type="email" class="form-control" name="email">
						<label for="senha" class="form-label">Senha:</label>
						<input type="password" class="form-control" name="senha">
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