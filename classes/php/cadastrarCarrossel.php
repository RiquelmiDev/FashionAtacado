<?php
    require_once '../Insercao.php';
    $insere = new Insercao();

    $nomeimagemCarrossel = $_POST['nomeimagemcarrossel'];

    $imagensCarrossel = $_FILES['imagensCarrossel'];

    $datadecadastro = date('Y-m-d H:i:s');

    if(isset($_FILES['imagensCarrossel'])) {
        $resultado = $insere->inseririmagemCarrossel($imagensCarrossel, $nomeimagemCarrossel, $datadecadastro);
    }

    header('location: ../sucesso.php'); exit;