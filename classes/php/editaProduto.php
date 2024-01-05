<?php
ini_set('display_arrors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

require_once '../Atualizacao.php';
date_default_timezone_set("America/Bahia");

$idproduto = $_POST['produto'];
$nomeProduto = $_POST['nome_cad'];
$valorproduto  = $_POST['valorproduto'];
$valorproduto = str_replace("R$ ","",$valorproduto);
$valorproduto = str_replace(",",".",$valorproduto);
$qtdestoque  = $_POST['quantidade_cad'];
$observacoes = $_POST['observacao'];
$idmarcaproduto = $_POST['marca_cad'];
$infoCompra = $_POST['infocompra'];

$insere = new Atualizacao();
$resultado = $insere->atualizarProduto($nomeProduto,$valorproduto,$qtdestoque,$idmarcaproduto,$observacoes,$idproduto, $infoCompra);