<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: login.php");
}

$logon = $_SESSION['login'];

if ($logon) {
?>
<?php
 require_once 'classes/Selecao.php';
 $busca=new Selecao();
 $resultado=$busca->selecionarMarca();
 foreach ( $resultado as $listar){
  $idMarca[] = $listar['idmarca'];
  $nomeMarca[] = $listar['nomemarca'];
 
}

?>
<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>Cadastro de produtos</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="src/css/cadastro.css"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="shortcut icon"  href="src/img/logonavegacao.png" type="icon">
</head>
<body>

<style>
      .botao1 {
        width:200px;
        height: 45px;
        border-radius: 5px;
        margin-top: 20px;
        padding: 15px 0;
        background-color:  #1C1C1C;
        color: #fff;
        font-weight: bold;
        font-size: 18px;
        border: none;
        align-items: right;
        transition: 0.5s;
        text-decoration: none;
      }


      .botao1:hover{
        background-color: #A9A9A9;
        transition: 0.5s;
        color: #000;
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
  <div class="container" >
   <div class="content">      
      <!--FORMULÁRIO DE CADASTRO-->
      
      <div id="cadastro">
      <a class="botao1 container-fluid d-flex flex-column justify-content-center align-items-center" href="table.php">Dados Cadastrados</a>
        <form class="form-container" method="post" action="classes/php/cadastroProduto.php" enctype="multipart/form-data"> 
          
          <h1>Cadastro de Produtos</h1> 
          <div>
            <p>
            <label for="exampleFormControlFile1">Fotos do produto</label>
            <input class="form-control" type="file" name="imagemProduto" class="form-control-file" id="imagemProduto" required="required" />
            </p>
          </div>

          <p> 
            <label for="nome_cad">Nome do Produto</label>
            <input class="form-control" id="nome_cad" name="nome_cad" required="required" type="text" placeholder="nome" required="required"/>
          </p>
           
          <p> 
            <label for="valorproduto">Preço</label>
            <input class="form-control" id="valorproduto" name="valorproduto" required="required" type="text" placeholder="Preço" required="required"/> 
          </p>
           
          <p> 
            <label for="senha_cad">Quantidade</label>
            <input class="form-control" id="quantidade_cad" name="quantidade_cad" required="required" type="number" placeholder="Quantidade do produto" required="required"/>
          </p>

          <p> 
            <label for="senha_cad">Informações de compra</label>
            <textarea class="form-control" id="" name="infocompra" rows="2" m-3></textarea>
          </p>

          <p> 
            <label for="marca_cad">Marca</label>
            <select class="form-select" name="marca_cad" id="marca_cad" required="required">
              <option></option>
              <?php for($i=0;$i<count($idMarca); $i++){ ?>
                <option value="<?php echo $idMarca[$i]; ?>"><?php echo $nomeMarca[$i]; ?></option>
                <?php } ?>
              
            </select>
          </p>
           <p>
            <div class="form-check form-check-inline" class="max-a">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label" for="inlineCheckbox1">P</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                <label class="form-check-label" for="inlineCheckbox2">M</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                <label class="form-check-label" for="inlineCheckbox2">G</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                <label class="form-check-label" for="inlineCheckbox2">GG</label>
              </div>
              
           </p>
          <p> 
            <label for="senha_cad">Observações</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="observacao" rows="3" m-3></textarea>
          </p>

          <p> 
            <input type="submit" value="Cadastrar"/> 
          </p>
           
         
        </form>
      </div>
    </div>
  </div>  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/f5b5cac2ff.js" crossorigin="anonymous"></script>
  
  
  <script>
    $('#valorproduto').keyup(function(){
      var v = $(this).val();
      v=v.replace(/\D/g,'');
      v=v.replace(/(\d{1,2})$/, ',$1');
      v=v.replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.');

      v = v != ''?'R$ '+v:'';
      $(this).val(v);
    })
  </script>
</body>
</html>
<?php
} else {
  echo "Sem Permissão!";
} ?>