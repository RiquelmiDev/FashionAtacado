<?php
require_once 'classes/Selecao.php';

$buscar = new Selecao();

$resultado = $buscar->ultimosProdutos2();
foreach ($resultado as $listar) {
    $idProduto[] = $listar['idproduto'];
    $nomeProduto[] = $listar['nomeproduto'];
    $valorProduto[] = $listar['valorproduto'];
    $imagemProduto[] = $listar['imagemproduto'];
    $infoCompra[] = $listar['infocompra'];
}


$resultado = $buscar->Carrossel();
foreach ($resultado as $listar) {
    $nomeimagemCarrossel[] = $listar['nomeimagemcarrossel'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/swiper-bundle.min.css">

    <link rel="stylesheet" href="src/css/styles.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="src/img/logonavegacao.png" type="icon">
    <title>FASHION ATACADO</title>
</head>
<style>
    .navbar {
        margin-top: -250px;
    }

    .imagem {
        height: 500px;
        margin-left: -200px;
    }

    body {
        background-color: #f9f9f9;
    }

    @media(max-width: 991px) {
        .slidebar {
            background-color: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
        }
    }
</style>

<body>

    <!--Barra de navegação-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent ">
        <div class="container">
            <!--Logo-->
            <div class="d-flex justify-content-start">
                <a class="navbar-brand fs-4 " href="index.php"><img class="imagem" src="src/img//logo.png" alt=""></a>
            </div>
            <!--Toggler-->
            <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!--SlideBar-->
            <div class="slidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

                <!--SideBar Header-->
                <div class="offcanvas-header text-white border-bottom">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <!--SideBar Body-->

                <!--Login / Sign up -->
                <div class="d-flex flex-column flex-lg-row justify-content-end align-items-center">
                    <div class="offcanvas-body d-flex  flex-lg-row p-4 p-lg-0">
                        <ul class="navbar-nav justify-content-center flex-grow-1 fs-5 pe-3 ">
                            <li class="nav-item mx-2">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link active" aria-current="page" href="produtosPagina2.php">Produtos</a>
                            </li>


                        </ul>
                    </div>
                    <a href="carrinho.php" class="botaoCart"><i class="fa-solid fa-cart-shopping fa-2xl" style="color: #ffffff;"></i></a>
                    <a href="login.php" class="botaoCart ml-4"><i class="fa-solid fa-user fa-2xl" style="color: #ffffff;"></i></a>
                </div>
            </div>
        </div>
        </div>
    </nav>

    <!--Carrossel de fundo-->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="margin-top: -350px; z-index: -9999;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="src/img/imagem1.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="src/img/imagem2.jpeg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="src/img/imagem3.png" alt="3 slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="src/img/imagem4.jpeg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="src/img/imagem5.jpeg" alt="Four slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>





    <section class="pt-5 pb-5">
        <div class="container" id="anchorret">
            <div class="row">
                <div class="col-6">
                    <h3 class="mb-3">Destaques </h3>
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <?php for ($i = 0; $i < 2; $i++) { ?>
                                <div class="carousel-item active">
                                    <div class="row">
                                        <?php for ($j = 0; $j < count($idProduto); $j++) { ?>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="src/img/<?php echo $imagemProduto[$j]; ?>" style="height: 350px; width:300px;">
                                                    <div class="card-body">
                                                        <h4 class="text-center"><?php echo $nomeProduto[$j]; ?></h4>
                                                        <strong>
                                                            <p class=" text-danger">R$ <?php echo $valorProduto[$j]; ?></p>
                                                        </strong>
                                                        <p class="infoCompra"><i class="fa-solid fa-credit-card" style="color: #000000;"></i> <?php echo $infoCompra[$j]; ?></p>
                                                        <div class="text-center">
                                                            <form class="form-container " method="post" action="classes/php/enviarProdutoCarrinho.php">
                                                                <input name="idproduto" type="hidden" value="<?php echo $idProduto[$j]; ?>">
                                                                <button class="button" type="submit">Adicionar ao
                                                                    Carrinho</button>
                                                            </form>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <footer class="text-center text-lg-start bg-light text-muted">



            <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="footi">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3"></i>Intitucional
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Sobre nós</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Regulamentos</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Política de Privacidade</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Trabalhe conosco</a>
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Ajuda
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Minha Conta</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Pagamentos</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Acessibilidade</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Devolução</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Central de Relacionamento
                    </h6>
                    <p>
                        <button class=" btn-primary col-9 m-6" id="botaoenviar" style="border: 2px solid cyan; border-radius: 20px; background: none; color: cyan; " type="submit">
                            Tire suas duvidas
                        </button>
                        <a href="">
                            <a href="#!" class="text-reset"></a>
                    </p>

                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">Contatos</h6>
                    <p><i class="fas fa-home me-3"></i> Brazil, Bahia</p>
                    <p>
                        <i class="fas fa-envelope me-3"></i>
                        FashionAtacado@gmail.com
                    </p>
                    <p><i class="fa-brands fa-whatsapp me-4"></i>(+75) 314464464</p>
                    <p><i class="fas fa-phone me-3"></i> (+75) 314464464</p>

                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>

        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2023 Copyright:
            <!--link da pagina-->
            <a class="text-reset fw-bold" href="index.php">FashionAtacado</a>
        </div>
        <!-- Copyright -->
        </footer>
    </section>
    <!-- Footer -->


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/f5b5cac2ff.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/f5b5cac2ff.js" crossorigin="anonymous"></script>

    <!-- Swiper JS -->
    <script src="src/js/swiper-bundle.min.js"></script>

    <!-- JavaScript -->
    <script src="src/js/script.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>

</html>