<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../Insercao.php';
date_default_timezone_set ("America/Bahia");

$nomeProduto  = $_POST['nome_cad'];
$valorproduto  = $_POST['valorproduto']; 
$valorproduto = str_replace("R$ ","",$valorproduto);
$valorproduto = str_replace(".","",$valorproduto);
$valorproduto = str_replace(",",".",$valorproduto); 
$qtdestoque  = $_POST['quantidade_cad'];
$idmarca = $_POST ['marca_cad'];
$observacoes = $_POST['observacao'];
$idusuario = 1;
$datadecadastro = date('Y-m-d H:i:s');
$infoCompra = $_POST['infocompra'];

if (isset($_FILES['imagemProduto']) && $_FILES['imagemProduto']['error'] === UPLOAD_ERR_OK) {

    $diretorioDestino = dirname(__FILE__) . '/../../src/img/';

    $nomeArquivo = uniqid('imagem_') .'.'. pathinfo($_FILES['imagemProduto']['name'], PATHINFO_EXTENSION);


    if (move_uploaded_file($_FILES['imagemProduto']['tmp_name'], $diretorioDestino . $nomeArquivo)) {

        $insere = new Insercao();
        $resultado = $insere->inserirProduto($nomeProduto,$valorproduto,$qtdestoque,$idmarca,$observacoes,$nomeArquivo,$idusuario,$datadecadastro, $infoCompra);

    } else {
        echo "Erro no envio do arquivo.";
    }

}