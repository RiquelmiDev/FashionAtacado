<?php

require_once 'classes/Selecao.php';

$busca = new Selecao();
$resultado = $busca->selecionarimagemCarrinho();
$somavalores = 0;

if (isset($resultado) && $resultado != null) {
  foreach ($resultado as $listar) {
    $idprodutocarrinho[] = $listar['idprodutocarrinho'];
    $nomeprodutocarrinho[] = $listar['nomeproduto'];
    $valorproduto[] = $listar['valorproduto'];
    $imagemproduto[] = $listar['imagemproduto'];
    $somavalores = $somavalores + $listar['valorproduto'];
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="src/css/carrinho.css" rel="stylesheet">
  <link rel="stylesheet" href="src/css/style.css">
  <link rel="shortcut icon" href="src/img/logonavegacao.png" type="icon">
  <title>Carrinho de compras</title>
</head>
<style>
  .imagem {
    margin-top: -30px;
    height: 260px;
  }

  .navbar {
    height: 80px;

  }
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
      </div>
    </div>
  </div>
  </div>
</nav>


<style>
  .texto {
    font-size: 100px !important;
    text-shadow:black 0.1em 0.1em 0.2em;
  }
  .bgProdutos {
    background-image: url('src/img/imagemCarrinho.jpg');
    background-position: cover;
    background-repeat: no-repeat;
    background-size: 1100px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    width: 100%;
    height: 350px;
    margin-top: 20px;

  }
</style>

<body>

  <script>
    function alerta() {
      swal("Compra finalizada", "success")
        .then(() => {
          window.location.href = "https://globo.com";
        });
      Swal.fire({
        title: "atencao",
        text: "sucesso",
        icon: "success"


      });

      Swal.setUrl("index.php");
    }
  </script>

  <div class="small-container">
    <div class="bgProdutos">
      <h1 class="texto text-white d-flex justify-content-center mb-5 ">Carrinho</h1>
    </div>
  </div>
  <section class="h-100 h-custom" style="background-color: #fff;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card">
            <div class="card-body p-4">

              <div class="row">

                <div class="col-lg-7">
                  <h5 class="mb-3"><a href="index.php" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Continuar Comprando</a></h5>
                  <hr>








                  <?php

                  if (isset($idprodutocarrinho) && $idprodutocarrinho != null) {
                    for ($i = 0; $i < count($idprodutocarrinho); $i++) { ?>
                      <div class="card m-3">


                        <div class="m-3 d-flex">
                          <img src="src/img/<?php echo $imagemproduto[$i]; ?>" width="100px">
                          <div class="row p-3">
                            <h5>
                              <?php echo $nomeprodutocarrinho[$i]; ?>
                            </h5>


                            <span>Valor Unitario: R$ <span class="valor-unitario"><?php echo $valorproduto[$i]; ?></span></span>

                            <span>Quantidade: <input class="quantidade" type="number" min="5" value="5" style="width: 60px;"></span>





                            <a class="botaoDeletar d-flex justify-content-between " href="classes/php/apagardadosCarrinho.php?idprodutocarrinho=<?php echo $idprodutocarrinho[$i]; ?>"><i class="fa-regular fa-trash-can fa-2xl text-danger"></i></a>
                          </div>


                        </div>
                      </div>
                    <?php }
                  } else { ?>
                    <h3>Carrinho vazio</h3>
                  <?php } ?>








                </div>
                <div class="col-lg-5">

                  <div class="card bg-dark text-white rounded-3">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="mb-0">Detalhes do Cartão</h5>

                      </div>

                      <p class="small mb-2">Tipo do Cartão</p>
                      <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-mastercard fa-2x me-2"></i></a>
                      <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-visa fa-2x me-2"></i></a>
                      <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-amex fa-2x me-2"></i></a>
                      <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-paypal fa-2x"></i></a>
                      <form class="mt-4">
                        <div class="form-outline form-white mb-4">
                          <input type="text" id="typeName" class="form-control form-control-lg" siez="17" placeholder="Nome do Titular" required="required"/>

                        </div>

                        <div class="form-outline form-white mb-4">
                          <input type="text" id="typeText" class="form-control form-control-lg" siez="17" placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required="required"/>

                        </div>

                        <div class="row mb-4">
                          <div class="col-md-6">
                            <div class="form-outline form-white">
                              <input type="date" id="typeExp" class="form-control form-control-lg" placeholder="MM/YYYY" size="7" id="exp" minlength="7" maxlength="7" required="required"/>
                              <label class="form-label mt-2" for="typeExp">Validade</label>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-outline form-white">
                              <input type="password" id="typeText" class="form-control form-control-lg" placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" required="required"/>
                              <label class="form-label mt-2" for="typeText">Cvv</label>
                            </div>
                          </div>
                        </div>

                      </form>

                      <hr class="my-4">

                      <div class="d-flex justify-content-between mb-4">

                        <p>Total R$
                        <div id="total">0</div>
                        </p>
                      </div>

                      <button href="index.php" type="button" class="btn btn-secondary btn-lg btn-block" data-toggle="modal" data-target="#modalPagamento"><i class="fa-solid fa-cart-shopping" style="color: #fff;"></i> Finalizar</button>

                      <div class="modal fade" id="modalPagamento" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <h1 class="tit text-dark text-center">Compra sendo enviada</h1>
                            <lord-icon class="d-flex justify-content-center align-content-center" src="https://cdn.lordicon.com/iejknaed.json" trigger="loop" colors="outline:#121331,primary:#3a3347,secondary:#4030e8,tertiary:#e8e230,quaternary:#4030e8" stroke="55" state="loop" style="width:250px;height:250px">
                            </lord-icon>

                            <div class="modal-footer">
                              <a class="btn btn-dark bg bg-dark col-12 text-white" href="index.php">Continue comprando</a>
                            </div>
                          </div>
                        </div>
                      </div>


                    </div>
                  </div>

                </div>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  



  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/f5b5cac2ff.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.all.min.js"></script>
  <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/f5b5cac2ff.js" crossorigin="anonymous"></script>
    <script src="src/js/estrelas.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
  <script src=src/js/contador2.js></script>
  <script src="src/js/sucesso.js"></script>


</body>

</html>