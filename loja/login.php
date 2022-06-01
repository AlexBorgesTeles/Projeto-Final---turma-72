<?php
    include "conexao.php";
	$titlePage = 'Login';
    include "cabecalho.php";
    if(isset($_GET['carrinho']) and $_GET['carrinho'] ==1 ){
		echo "<div class='alert alert-danger alert-dimissible fade show' role='danger'>
				<img src='../imagens/atenção.jpg' width='50' height='50' id='Slide1' alt='Slide1'/>
				<h6>Você não pode acessar o carrinho pois você não está logado! Logue-se e você terá acesso ao carrrinho!</h6>
					<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
					</button>
				</div>";
	}
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
					
					<?php 
					if(isset($_GET['error']) and $_GET['error'] == 1){
						echo "
								<div class='alert mt-2 alert-warning alert-dismissible fade show' role='alert'>
								<strong>Email incorreto!</strong> Esse email não está vinculado a sua conta.
								<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
					  			</div>";
						}else{
						if(isset($_GET['error']) and $_GET['error'] == 2){
							echo "<div class='alert mt-2 alert-warning alert-dismissible fade show' role='alert'>
								<strong>Senha incorreta!</strong> Essa senha não está vinculada a sua conta.
								<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
						  </div>";
						}
						if(isset($_GET['erro']) and $_GET['erro'] == 34){
							echo "<div class='alert mt-2 alert-warning alert-dismissible fade show' role='alert'>
								<strong>Para continuar as compras, logue ou faça seu cadastro!
								<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
						  </div>";
						}
					}
					?>
					</div>
					<div class="d-grid gap-2">
					<button type="submit" class="btn btn-dark">Enviar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script>
		const alertList = document.querySelectorAll('.alert')
		const alerts = [...alertList].map(element => new bootstrap.Alert(element))

	</script>

<?php
    include "footer.php";
?>