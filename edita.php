<?php
session_start();
if(!isset($_SESSION['login'])){
    header("Location: login.php");
}

$logon = $_SESSION['login'];

if($logon){
  $idProd = $_GET['idprod'];
  require_once 'classes/Selecao.php';
  $busca=new Selecao();
  $resultado=$busca->selecionarMarca();
     foreach ( $resultado as $listar){
         $idMarca[] = $listar['idmarca'];
         $nomeMarca[] = $listar['nomemarca'];
  }
   $resultado=$busca->selecionarProdutosUnico($idProd);
     
         $idproduto = $resultado->idproduto;
         $idusuario = $resultado->idusuario;
         $nomemarca = $resultado->nomemarca;
         $datadecadastro = $resultado->datadecadastro;
         $nomeproduto = $resultado->nomeproduto;
         $qtdestoque = $resultado->qtdestoque;
         $valorproduto = $resultado->valorproduto;
         $observacaoproduto = $resultado->observacaoproduto;
         $imagemproduto = $resultado->imagemproduto;
         $idmarca = $resultado->idmarca;
         $infoCompra = $resultado->infocompra;
 
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
                <form class="form-container" method="post" action="classes/php/editaProduto.php" enctype="multipart/form-data">

                    <h1>Edição de Produto</h1>


                    <p>
                        <label for="nome_cad">Nome do Produto</label>
                        <input class="form-control" id="nome_cad" name="nome_cad" value="<?php echo $nomeproduto; ?>"
                            required="required" type="text" placeholder="nome" />
                    </p>

                    <p>
                        <label for="valorproduto">Preço</label>
                        <input class="form-control" id="valorproduto" value="<?php echo $valorproduto; ?>"
                            name="valorproduto" required="required" type="text" placeholder="Preço" />
                    </p>

                    <p>
                        <label for="senha_cad">Quantidade</label>
                        <input class="form-control" id="quantidade_cad" value="<?php echo $qtdestoque; ?>"
                            name="quantidade_cad" required="required" type="number"
                            placeholder="Quantidade do produto" />
                    </p>

                    
                    <p>
                        <label for="senha_cad">Informações de Compra</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" required="required"
                            name="infocompra" rows="2" m-3><?php echo $infoCompra; ?></textarea>
                    </p>

                    <p>
                        <label for="marca_cad">Marca</label>
                        <select class="form-select" name="marca_cad" id="marca_cad" required="required">
                            <option></option>
                            <?php for($i=0;$i<count($idMarca); $i++){ ?>
                            <option value="<?php echo $idMarca[$i]; ?>" <?php if($idMarca[$i] == $idmarca){?> selected
                                <?php }?>><?php echo $nomeMarca[$i]; ?></option>
                            <?php } ?>

                        </select>
                    </p>

                    <a class="btn btn-outline-dark" href="tamanho.php?produto=<?php echo $idProd; ?>">Adicionar
                        Tamanho</a>
                    <a class="btn btn-outline-dark" href="imagens.php?produto=<?php echo $idProd; ?>">Adicionar
                        Imagem</a>

                    <p>
                        <label for="senha_cad">Observações</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" required="required"
                            name="observacao" rows="3" m-3><?php echo $observacaoproduto; ?></textarea>
                    </p>

                    <p>
                        <input type="hidden" name="produto" value="<?php echo $idProd;?>" />
                        <input type="submit" value="Editar" />
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


    <script>
    $('#valorproduto').keyup(function() {
        var v = $(this).val();
        v = v.replace(/\D/g, '');
        v = v.replace(/(\d{1,2})$/, ',$1');
        v = v.replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.');

        v = v != '' ? 'R$ ' + v : '';
        $(this).val(v);
    })
    </script>
</body>
</html>
<?php   
}else {
    echo "Sem Permissão!";
}?>