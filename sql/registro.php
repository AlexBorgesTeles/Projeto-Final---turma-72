<!DOCTYPE html>
<html lang="pt-BR">
<head>
 <meta charset="UTF-8">
	  <title>Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body>
     <div class="container">
        <h3 class="mt-5 text-center">Cadastro</h3>
        <form action="salvar2.php" method="post" class="row">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" name="nome">
                 <label for="email" class="form-label">Email:</label>
                <input type="text" class="form-control" name="email">
                 <label for="cpf" class="form-label">CPF:</label>
                <input type="text" class="form-control" name="cpf">
                    <label for="ender" class="form-label">Endereço:</label>
                <input type="text" class="form-control" name="endereco">
                 <label for="telef" class="form-label">Telefone:</label>
                <input type="text" class="form-control" name="telefone">
                 <label for="senha" class="form-label">Senha:</label>
                <input type="text" class="form-control" name="senha">
            </div>
             <div class="d-grid gap-2">
  
 <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      
  </div>
    </div>
    	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
    