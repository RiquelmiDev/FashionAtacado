<?php
ini_set('display_arrors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

require_once '../Insercao.php';
date_default_timezone_set("America/Bahia");


$idproduto = $_POST['idproduto'];


$insere = new Insercao();
$resultado = $insere->inserirProduto2Carrinho($idproduto);