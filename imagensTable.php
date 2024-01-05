<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: login.php");
}

$logon = $_SESSION['login'];

if ($logon) {

 $idProduto = $_GET['produto'];

?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8" />
    <title>Formulário de Login e Registro com HTML5 e CSS3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="src/css/cadastro.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="content">
            <!--FORMULÁRIO DE LOGIN-->
            <div id="login">
            </div>


            <!--FORMULÁRIO DE CADASTRO-->
            <div id="cadastro">
                <form method="post" action="classes/php/enviarImagensTable.php" enctype="multipart/form-data">

                    <h1>Imagens</h1>
                    <p>
                    <div class="form-check form-check-inline" class="max-a">
                        <label>Fotos dos Produtos</label>
                        <input type="file" name="imagens[]" multiple>

                    </div>


                    </p>

                    <p>
                        <input type="hidden" name="produto" value="<?php echo $idProduto; ?>" />
                        <input type="submit" value="Cadastrar" />
                    </p>


                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>



</body>

</html>
<?php
}else {
    echo "Sem Permissão!";
}?>