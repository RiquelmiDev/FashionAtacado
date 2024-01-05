<?php

    require_once '../Delecao.php';
    date_default_timezone_set ("America/Bahia");

    $idprodutocarrinho = $_GET['idprodutocarrinho'];

    $deleta = new Delecao();
    $resultado = $deleta->deletarprodutoCarrinho2($idprodutocarrinho);