<!DOCTYPE HTML>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $titlePage;?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <!-- Favicon -->
        <!-- <link rel="icon" type="image/png" href="icones/fofo.png"> -->
    </head>

    <header class="site-header sticky-top py-1" style="background-color: #529A4A">
        <nav class="container d-flex flex-column flex-md-row justify-content-between">
            <div class="col-3">
                <a class="py-2" href="home.php" aria-label="Product">
                    <img width="90" height="35" src="../imagens/ICONE.png">
                </a>
            </div>
            
            <div class="col">
                <a class="py-2 d-none d-md-inline-block" style="color:black" href="home.php"><i class="bi bi-house-fill"> Início</i></a>
            </div>
            <div class="col">
            <ul class="nav nav-tabs">
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" style="color:black" role="button" aria-haspopup="true" aria-expanded="false"><i class="bi bi-box2-fill"> Estoque</i></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#"> Tudo</a>
                        <a class="dropdown-item" href="#"> Masculino</a>
                        <a class="dropdown-item" href="#"> Feminino</a>
                    </div>
                </li>
            </ul>
            </div>
            <div class="col-2">
                <a class="py-2 d-none d-md-inline-block" style="color:black" href="carrinho.php?id_carrinho=1"><i class="bi bi-cart-fill"> Carrinho</i></a>
            </div>
            <div class="col">

            </div>
            <div class="2">
                <button type="button" class="btn btn-dark">
                    <a href="login.php" class="d-inline p-2  text-white">
                        <?php if(isset($_SESSION['user_id']) and $_SESSION['user_id'] != ''){
		                $sql2 = "select * from pessoa where id_pessoa = ".$_SESSION['user_id'];
		                $query = mysqli_query($mysql,$sql2);
		                $pessoa = mysqli_fetch_assoc($query);
		                $nome = $pessoa['nome'];
                        echo $nome;
	                    }else{echo '<i class="bi bi-person-circle"> Login</i>';}?>

                </a>
                </button>
                <button type="button" class="btn btn-dark">
                    <a class="d-inline p-2 text-white" href="cadastro.php"><i class="bi bi-door-open-fill"> Cadastra-se</i></a>
                </button>
            </div>
        </nav>
    </header>
