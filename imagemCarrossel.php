<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: login.php");
}

$logon = $_SESSION['login'];

if ($logon) {
?>
  <!DOCTYPE html>

  <head>
    <meta charset="UTF-8" />
    <title>Formulário de Login e Registro com HTML5 e CSS3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="src/css/imagemCarrossel.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>

  <body>
    <div class="container">
      <div class="content">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
          <a class="navbar-brand" href="index.php">Fashion Atacado</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="menu collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">   
            <li class="nav-item">
                <a class="nav-link" href="cadastro.php"  style="white-space: nowrap; color: #ffffff; margin-right: 30px;">Cadastrar Produto</a>
              </li>
              <div class="d-flex" style="height: 35px; color: #ffffff; padding-top: 5px; margin-left: 5px; margin-right: 5px;">
                <div class="vr"></div>
              </div>           
              
              <li class="nav-item">
                <a class="nav-link" href="imagens.php"  style="white-space: nowrap; color: #ffffff; margin-right: 30px;">Cadastro Imagem</a>
              </li>
              <div class="d-flex" style="height: 35px; color: #ffffff; padding-top: 5px; margin-left: 5px; margin-right: 5px;">
                <div class="vr"></div>
              </div>
              <li class="nav-item">
                <a class="nav-link" href="tamanho.php"  style="white-space: nowrap; color: #ffffff; margin-right: 30px;">Adicionar Tamanho</a>
              </li>
              
            <td>
                <a class="botaoSair container-fluid d-flex flex-column justify-content-center align-items-center" href="login.php"> <i class="fa-solid fa-right-from-bracket fa-xl" style="color: #ffffff;"></i></a>
            </td>
          </div>
        </div>
      </nav>
        <!--FORMULÁRIO DE LOGIN-->
        <div id="login">
        </div>


        <!--FORMULÁRIO DE CADASTRO-->
        <div id="cadastro">
          <form method="post" action="classes/php/cadastrarCarrossel.php" enctype="multipart/form-data">

            <h1>Imagens do Carrossel</h1>
            <p>
            <div class="form-check form-check-inline" class="max-a">

              <label>Nome Imagem</label>
              <input type="text" name="nomeimagemcarrossel">

              <label>Fotos dos Produtos</label>
              <input type="file" name="imagensCarrossel[]" multiple>


            </div>


            </p>

            <p>
              <input type="submit" value="Cadastrar" />
            </p>


          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f5b5cac2ff.js" crossorigin="anonymous"></script>



  </body>

  </html>
<?php
} else {
  echo "Sem Permissão!";
} ?>