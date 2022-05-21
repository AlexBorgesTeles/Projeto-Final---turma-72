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

    <header class="site-header sticky-top py-1" style="background-color: gold">
        <nav class="container d-flex flex-column flex-md-row justify-content-between">
            <a class="py-2" href="#" aria-label="Product">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
            </a>
            <a class="py-2 d-none d-md-inline-block text-black" href="home.php">Início</a>
            <a class="py-2 d-none d-md-inline-block text-black" href="#">Masculino</a>
            <a class="py-2 d-none d-md-inline-block text-black" href="#">Feminino</a>
            <a class="py-2 d-none d-md-inline-block text-black" href="#">Infantil</a>
            <a class="py-2 d-none d-md-inline-block text-black" href="#">Estoque</a>
            <a class="py-2 d-none d-md-inline-block text-black" href="carrinho.php?id_carrinho= ">Carrinho</a>
                <a href="login.php" class="d-inline p-2  text-black"><?php if(isset($_SESSION['user_id']) and $_SESSION['user_id'] != ''){
		$sql2 = "select * from pessoa where id_pessoa = ".$_SESSION['user_id'];
		$query = mysqli_query($mysql,$sql2);
		$pessoa = mysqli_fetch_assoc($query);
		$nome = $pessoa['nome'];
                echo $nome;
	}else{echo 'Login';}?><i class="bi bi-door-open-fill"></i>
                </a>
                <a class="d-inline p-2 text-black" href="cadastro.php">Cadastra-se</a>
        </nav>
    </header>
