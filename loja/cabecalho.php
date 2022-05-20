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

    <header class="site-header sticky-top py-1" style="background-color: #5ECE3E">
        <nav class="container d-flex flex-column flex-md-row justify-content-between">
            <div class="col-2">
                <a class="py-2 d-none d-md-inline-block" href="home.php" style="color: white" >
                    <i class="bi bi-shop">ICONE</i>
                </a>
            </div>
            <div class="col-2">
                <a class=" py-2 d-none d-md-inline-block text-gray" style="color: white" href="home.php">
                    <i class="bi bi-house-fill"> Início</i>
                </a>
            </div>
            <div class="col-2">
                <a class="py-2 d-none d-md-inline-block text-gray" style="color: white" href="carrinho.php">
                    <i class="bi bi-cart-fill"> Carrinho</i>
                </a>
            </div>
            <diV class="col-3">
                <a class="py-2 d-none d-md-inline-block" style="color: white" href="#">
                    <i class="bi bi-info-circle-fill"> Sobre</i>
                </a>
            </div>
            <div class="col-4">
                <button type="button" class="btn btn-secondary">
                    <a href="login.php" class="d-inline p-2  text-white">
                        <i class="bi bi-person-circle"></i> Login</i>
                    </a>
                </button>
                <button type="button" class="btn btn-secondary">
                    <a class="d-inline p-2 text-white" href="cadastro.php">
                        <i class="bi bi-door-open-fill"> Cadastrar-se</i>
                    </a>
                </button>
            </div>
        </nav>
    </header>
