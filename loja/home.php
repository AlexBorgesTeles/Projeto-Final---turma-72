    <!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Página Inicial</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body>
    <header class="site-header sticky-top " style="background-color: black;">
        <nav class="container d-flex flex-column flex-md-row justify-content-between">
            <a class="col" href="#" aria-label="Product">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
            </a>
            <a class="col" href="#">Masculino</a>
            <a class="col" href="#">Feminino</a>
            <a class="col" href="#">Infantil</a>
            <a class="col" href="#">Estoque</a>
            <a class="col" href="#">Ajuda</a>
            <a class="col" href="#">Carrinho</a>
                <div id="divBusca">
                <input type="text" id="txtBusca" placeholder="Buscar..."/>
                <div class="col"><a href="https://www.google.com"><img src="../imagens/Lupa.png" id="btnBusca" alt="Buscar" width="24" height="24"/></a></div>
                </div>
                <div class="col">
                <img src="../imagens/Login.jpg" id="Login" alt="Login" width="24" height="24"/>
                </div>
                <a class="col" href="#">Cadastra-se</a>
        </nav>   
    <div class="container">
        <div class="row">
        <!----Linha-->
        <br style="p-3">
        <!---- Fim Linha-->
        <!----Slide Central-->
        <div class="row">
            <div class="col btn">
                <img src="../imagens/camisetas1.jpg" height="200" width="600"id="Slide1" alt="Slide1"/>
            </div>
        </div>
        <!----Fim Slide Central-->
        <div class="row">
            <div class="col">
                <h3 style="text-align: center; color:white;">Em estoque - Marcas Famosas - Aproveite as promoções </h3>
            </div>
        </div>
        <!----Linha-->
        <br style="p-3">
        <!---- Fim Linha-->
        <div class="row">
            <div class="col">
                <div class="card" style="width: 100;">
                        <img src="../imagens/camisas2.jpg" class="card-img-top" alt="camisasC">
                    <div class="card-body">
                        <h5 class="card-title">Marca e Estampa</h5>
                        <p class="card-text">R$00,00</p>
                          <a href"detalhes.php" class="btn btn-primary">Detalhes do produto</a>
                        <a href="carrinho.php" class="btn btn-warning">Coloque no carrrinho</a>
                    </div>
                </div>
            </div>
            <div class="col-3 btn">
                <div class="card" style="width: 100;">
                        <img src="../imagens/camisas3.jpg" class="card-img-top" alt="camisasC">
                    <div class="card-body">
                        <h5 class="card-title">Marca e Estampa</h5>
                        <p class="card-text">R$00,00</p>
                            <a href"detalhes.php" class="btn btn-primary">Detalhes do produto</a>
                        <a href="carrinho.php" class="btn btn-warning">Coloque no carrrinho</a>
                    </div>
                </div>
            </div>
            <div class="col-3 btn">
                <div class="card" style="width: 100;">
                        <img src="../imagens/camisas2.jpg" class="card-img-top" alt="camisasC">
                    <div class="card-body">
                        <h5 class="card-title">Marca e Estampa</h5>
                        <p class="card-text">R$00,00</p>
                        <a href"detalhes.php" class="btn btn-primary">Detalhes do produto</a>
                        <a href="carrinho.php" class="btn btn-warning">Coloque no carrrinho</a>
                    </div>
                </div>
            </div>
            <div class="col-3 btn">
                <div class="card" style="width: 100;">
                        <img src="../imagens/mostra.jpeg" class="card-img-top" alt="camisasC">
                    <div class="card-body">
                        <h5 class="card-title">Marca e Estampa</h5>
                        <p class="card-text">R$00,00</p>
                       <a href="detalhes.php" class="btn btn-primary">Detalhes do produto</a>
                        <a href="carrinho.php" class="btn btn-warning">Coloque no carrrinho</a>
                    </div>
                </div>
            </div>
        </div>
        <!----Linha-->
        <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../imagens/camisas1.jpg" style="height: 500px; width: 120" class="d-block w-100" alt="carrosel1">
                    </div>
                    <div class="carousel-item">
                        <img src="../imagens/camisas2.jpg" style="height: 500px; width: 120" class="d-block w-100" alt="carrosel2">
                    </div>
                    <div class="carousel-item">
                        <img src="../imagens/camisas3.jpg" style="height: 500px; width: 120" class="d-block w-100" alt="carrosel3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
        <div>
        <!----Linha-->
    </div> 
    <footer class="container py-5">
        <div class="row">
            <div class="col-12 col-md">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
            <small class="d-block mb-3 text-muted">&copy; 2017–2021</small>
            </div>
            <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
                <li><a class="link-secondary" href="#">Cool stuff</a></li>
                <li><a class="link-secondary" href="#">Random feature</a></li>
               <li><a class="link-secondary" href="#">Team feature</a></li>
                <li><a class="link-secondary" href="#">Stuff for developers</a></li>
                <li><a class="link-secondary" href="#">Another one</a></li>
                <li><a class="link-secondary" href="#">Last time</a></li>
            </ul>
            </div>
            <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
                <li><a class="link-secondary" href="#">Resource name</a></li>
                <li><a class="link-secondary" href="#">Resource</a></li>
                <li><a class="link-secondary" href="#">Another resource</a></li>
                <li><a class="link-secondary" href="#">Final resource</a></li>
            </ul>
            </div>
            <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
                <li><a class="link-secondary" href="#">Business</a></li>
                <li><a class="link-secondary" href="#">Education</a></li>
                <li><a class="link-secondary" href="#">Government</a></li>
                <li><a class="link-secondary" href="#">Gaming</a></li>
            </ul>
            </div>
            <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
                <li><a class="link-secondary" href="#">Team</a></li>
                <li><a class="link-secondary" href="#">Locations</a></li>
                <li><a class="link-secondary" href="#">Privacy</a></li>
                <li><a class="link-secondary" href="#">Terms</a></li>
            </ul>
            </div>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
