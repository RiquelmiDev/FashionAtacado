<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}

$logon = $_SESSION['login'];

if ($logon) {

    require_once 'classes/selecao.php';

    $busca = new Selecao();
    $resultado = $busca->selecionarProdutos();

    if (isset($resultado) && $resultado != null) {
        foreach ($resultado as $listar) {
            $idproduto[] = $listar['idproduto'];
            $nomeproduto[] = $listar['nomeproduto'];
            $nomemarca[] = $listar['nomemarca'];
            $qtdestoque[] = $listar['qtdestoque'];
            $valorproduto[] = $listar['valorproduto'];
            $observacaoproduto[] = $listar['observacaoproduto'];
            $infoCompra[] = $listar['infocompra'];
        }
    }
?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <link href="src/css/table.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Tabela</title>
        <link rel="shortcut icon" href="src/img/logonavegacao.png" type="icon">
    </head>

    <body>
        <style>
            .botao1 {
                width: 15%;
                height: 45px;
                border-radius: 5px;
                margin-top: 20px;
                padding: 15px 0;
                background-color: #1C1C1C;
                color: #fff;
                font-weight: bold;
                font-size: 18px;
                border: none;
                margin-left: 10px;
                transition: 0.5s;
                text-decoration: none;
            }

            .botaoDeletar {

                text-decoration: none;
                border-radius: 100px;
                margin-top: 20px;
                padding: 15px 0;
            }

            .botaoEditar {
                text-decoration: none;
                border-radius: 100px;
                margin-top: 20px;
                padding: 15px 0;

            }

            .botao1:hover {
                background-color: #A9A9A9;
                transition: 0.5s;
                color: #000;
            }

            .obs {
                width: 30%;
            }

            body {
                margin-top: 70px;
            }
        </style>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index.php">Fashion Atacado</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="menu collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="cadastro.php" style="white-space: nowrap; color: #ffffff; margin-right: 30px;">Cadastrar Produto</a>
                        </li>
                        <div class="d-flex" style="height: 35px; color: #ffffff; padding-top: 5px; margin-left: 5px; margin-right: 5px;">
                            <div class="vr"></div>
                        </div>

                        <li class="nav-item">
                            <a class="nav-link" href="imagens.php" style="white-space: nowrap; color: #ffffff; margin-right: 30px;">Cadastro Imagem</a>
                        </li>
                        <div class="d-flex" style="height: 35px; color: #ffffff; padding-top: 5px; margin-left: 5px; margin-right: 5px;">
                            <div class="vr"></div>
                        </div>
                        <li class="nav-item">
                            <a class="nav-link" href="tamanho.php" style="white-space: nowrap; color: #ffffff; margin-right: 30px;">Adicionar Tamanho</a>
                        </li>

                        <td>
                            <a class="botaoSair container-fluid d-flex flex-column justify-content-center align-items-center" href="login.php"> <i class="fa-solid fa-right-from-bracket fa-xl" style="color: #ffffff;"></i></a>
                        </td>
                </div>
            </div>
        </nav>

        <div class="cont container-fluid d-flex flex-column justify-content-center align-items-center" style="width: 80%;">
            <div>
                <table class="table table-bordered border-black table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Preço</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Info de Compra</th>
                            <th scope="col">Tamanhos</th>
                            <th scope="col">Observações</th>
                            <th scope="col">Ação</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">



                        <?php
                        if (isset($idproduto) && $idproduto != null) {
                            for ($i = 0; $i < count($idproduto); $i++) { ?>
                                <tr>
                                    <td><?php echo $idproduto[$i]; ?></td>
                                    <td><?php echo $nomeproduto[$i]; ?></td>
                                    <td><?php echo $nomemarca[$i]; ?></td>
                                    <td><?php echo $valorproduto[$i]; ?></td>
                                    <td><?php echo $qtdestoque[$i]; ?></td>
                                    <td><?php echo $infoCompra[$i]; ?></td>

                                    <td>
                                        <?php
                                        $resultado = $busca->selecionarTamanhoProduto($idproduto[$i]);
                                        if (isset($resultado) && $resultado != null) {

                                            foreach ($resultado as $listar) {
                                                $idtamanhores[$i][] = $listar['idtamanho'];
                                                $nometamanhores[$i][] = $listar['nometamanhoproduto'];
                                            }
                                            for ($j = 0; $j < count($idtamanhores[$i]); $j++) {
                                                echo $nometamanhores[$i][$j] . ",";
                                            }
                                        } else {
                                            echo "Nenhum";
                                        }

                                        ?>
                                    </td>

                                    <td class="obs"><?php echo $observacaoproduto[$i]; ?></td>

                                    <td>
                                        <a class="botaoEditar container-fluid d-flex flex-column justify-content-center align-items-center" href="edita.php?idprod=<?php echo $idproduto[$i]; ?>"><i class="fa-regular fa-pen-to-square fa-2xl" style="color: #000000;"></i></a>
                                        <a class="botaoDeletar container-fluid d-flex flex-column justify-content-center align-items-center" href="classes/php/apagarDados.php?idprod=<?php echo $idproduto[$i]; ?>"><i class="fa-regular fa-trash-can fa-2xl text-danger"></i></a>
                                    </td>



                                <?php }
                        } else { ?>
                                <h3>NENHUM USUARIO CADASTRADO</h3>
                            <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
        <script src="https://kit.fontawesome.com/f5b5cac2ff.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>
    </body>

    </html>
<?php
} else {
    echo "Sem Permissão!";
} ?>