<?php
require_once 'classes/Selecao.php';

$buscar = new Selecao();

$resultado = $buscar->ultimosProdutos();
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
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Produtos</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="C:\Users\HannahOsniBrandaoSan\Downloads\Projeto\Projeto\css\produtos.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="src/css/produtospagina2.css">
  <link rel="shortcut icon" href="src/img/logonavegacao.png" type="icon">
  <style>
    .texto {
      font-size: 100px !important;
      text-shadow: black 0.1em 0.1em 0.2em;
      margin-top: -70px;

    }

    .imagem {
      margin-top: -30px;
      height: 260px;
    }

    .bgProdutos {
      background-image: url('src/img/legenda-para-foto-preto-e-branco-2-1920x960.jpg');
      background-position: cover;
      background-repeat: no-repeat;
      background-size: 1100px;
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 350px;
      margin-top: 20px;

    }

    .navbar {
      height: 80px;

    }
  </style>

<body>
  <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
    <div class="container">
      <!--Logo-->
      <a class="navbar-brand fs-4" href="index.php"><img class="imagem" src="src/img/logo.png" alt=""></a>
      <!--Toggler-->
      <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!--SlideBar-->
      <div class="slidebar offcanvas offcanvas-start bg-dark d-flex " tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

        <!--SideBar Header-->
        <div class="offcanvas-header text-white border-bottom bg-dark">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
          <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <!--SideBar Body-->

        <!--Login / Sign up -->
        <div class="d-flex flex-column flex-lg-row justify-content-end align-items-center bg-dark">
          <div class="offcanvas-body d-flex  flex-lg-row p-4 p-lg-0 bg-dark">
            <ul class="navbar-nav justify-content-center flex-grow-1 fs-5 pe-3 bg-dark">
              <li class="nav-item mx-2">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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




  <div class="small-container">
    <div class="bgProdutos">
      <h1 class=" texto text-white d-flex justify-content-center mb-5 ">Produtos</h1>
    </div>


    <section class="pt-5 pb-5">
      <div class="container" id="anchorret">
        <div class="row">

          <div class="col-12">
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

              <div class="carousel-inner">
                <?php for ($i = 0; $i < 2; $i++) { ?>
                  <div class="carousel-item active">
                    <div class="row">
                      <?php for ($j = 0; $j < count($idProduto); $j++) { ?>
                        <div class="col-md-3 mb-3">
                          <div class="card">
                            <img class="img-fluid" alt="100%x280" src="src/img/<?php echo $imagemProduto[$j]; ?>" style="height: 300px; width:500px;">
                            <div class="card-body">
                              <h4 class="card-title"><?php echo $nomeProduto[$j]; ?></h4>
                              <p class="card-text text-danger">R$ <?php echo $valorProduto[$j]; ?></p>
                              <p class="infoCompra"><i class="fa-solid fa-credit-card" style="color: #000000;"></i> <?php echo $infoCompra[$j]; ?></p>

                              <div class="text-center">
                                <form class="form-container " method="post" action="classes/php/enviarProdutoCarrinho2.php">
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
  </div>
  </section>


  <!--------------------------------------footer---------------------------->
  <!--------------------------------------footer---------------------------->
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
  </script>
  <script src="https://kit.fontawesome.com/f5b5cac2ff.js" crossorigin="anonymous"></script>
  <script src="src/js/estrelas.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="js/scripts.js"></script>
  <script>
    $(window).scroll(function() {
      if ($(document).scrollTop() > 50) {
        $('.nav').addClass('affix');
        console.log("OK");
      } else {
        $('.nav').removeClass('affix');
      }
    });
  </script>

</body>

</html>