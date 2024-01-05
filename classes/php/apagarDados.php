<?php

    require_once '../Delecao.php';
    date_default_timezone_set ("America/Bahia");

    $idproduto = $_GET['idprod'];

    $deleta = new Delecao();
    $resultado = $deleta->deletarProduto($idproduto);