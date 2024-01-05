<?php
    require_once '../Insercao.php';
    $insere = new Insercao();

    $idproduto = $_POST['produto'];

    $datahoracadastro = date('Y-m-d H:i:s');

    if(isset($_FILES['imagens'])) {
        $resultado = $insere->inserirImagens($_FILES['imagens'], $idproduto, $datahoracadastro);
    }

    header('location: ../../tablecarrossel.php'); exit;