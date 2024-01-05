<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
}

$logon = $_SESSION['login'];

if ($logon) {
    $idProduto = $_GET['produto'];

?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <title></title>
    </head>

    <body>
        <style>
            .botao {
                width: 200px;
                height: 45px;
                border-radius: 100px;
                margin-top: 20px;
                padding: 15px 0;
                background-color: #1C1C1C;
                color: #fff;
                font-weight: bold;
                font-size: 18px;
                border: none;
                align-items: center;
                transition: 0.5s;
            }

            .botao:hover {
                background-color: #A9A9A9;
                transition: 0.5s;
                color: #000;
            }

            body {
                background-image: url('../anonimo.jpg');
                background-size: cover;
                background-repeat: no-repeat;
                color: #ffffff;

            }

            .area {
                width: 15%;
                background-color: #fff;
                border-radius: 8px;
                box-shadow: 5px 5px 8px rgba(0, 0, 0.336);
            }

            h1 {
                color: #000;
                font-size: 18px;
                text-align: center;
            }

            a {
                text-decoration: none;
            }
        </style>


        <main>

            <div class="container-fluid d-flex flex-column justify-content-center align-items-center" style="min-height: 100vh;">

                <div class="area p-4 mb-0">
                    <form action="sucessoApagar.php" method="post">

                        <h1>DADOS DELETADOS COM SUCESSO</h1>


                        <a class="botao container-fluid d-flex flex-column justify-content-center align-items-center" href="../table.php">Voltar para cadastro</a>
                    </form>
                </div>
            </div>
        </main>

        <footer class="text-center">
            <p>&copy; <?php echo date("Y"); ?> Senac. Todos os direitos reservados.</p>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>

    </body>

    </html>
<?php
} else {
    echo "Sem Permissão!";
} ?>