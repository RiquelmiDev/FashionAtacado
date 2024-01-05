<?php
ini_set('display_arrors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

require_once '../Insercao.php';
date_default_timezone_set("America/Bahia");

$idproduto = $_POST['produto'];
$nomeTamanho = $_POST['nometamanho'];
$datadecadastro = date('Y-m-d H:i:s');
$insere = new Insercao();
for($i=0;$i<count($nomeTamanho);$i++){
    $resultado = $insere->inserirTamanho($nomeTamanho[$i],$idproduto,$datadecadastro);
}

header('location: ../../table.php'); exit;
