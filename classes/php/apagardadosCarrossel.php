<?php

    require_once '../Delecao.php';
    date_default_timezone_set ("America/Bahia");

    $idimagemCarrossel = $_GET['idimagemcarrossel'];

    $deleta = new Delecao();
    $resultado = $deleta->deletarimagemCarrossel($idimagemCarrossel);