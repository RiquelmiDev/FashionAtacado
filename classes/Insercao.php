<?php
require_once 'conexao.php';

class Insercao
{
    function inserirProduto($nomeProduto, $valorproduto, $qtdestoque, $idmarca, $observacaoproduto, $imagemproduto,  $idusuario, $datadecadastro, $infoCompra)
    {
        try {
            $pdo = new pdo('mysql:host=' . HOST_BD . ';dbname=' . BD_BD, USR_BD, PW_BD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec("set names utf8");
        } catch (PDOException $erro) {
            echo "Erro na Conexão" . $erro->getMessage();
        }

        try {
            $stmt = $pdo->prepare("INSERT INTO produtos (nomeproduto, valorproduto, qtdestoque, idmarca,observacaoproduto, imagemproduto,  idusuario, datadecadastro, infocompra) VALUES (:nomeproduto, :valorproduto, :qtdestoque, :idmarca, :observacaoproduto,:imagemproduto, :idusuario, :datadecadastro, :infocompra)");


            $stmt->bindParam(':nomeproduto', $nomeProduto);
            $stmt->bindParam(':valorproduto', $valorproduto);
            $stmt->bindParam(':qtdestoque', $qtdestoque);
            $stmt->bindParam(':idmarca', $idmarca);
            $stmt->bindParam(':observacaoproduto', $observacaoproduto);
            $stmt->bindParam(':imagemproduto', $imagemproduto);
            $stmt->bindParam(':idusuario', $idusuario);
            $stmt->bindParam(':datadecadastro', $datadecadastro);
            $stmt->bindParam(':infocompra', $infoCompra);


            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $resultadoInsert = "OK";
                header('location: /Projeto/table.php');
                exit;
            }
        } catch (PDOException $erro) {
            echo "Erro:  " . $erro->getMessage();
        }
    }

    
    function inserirTamanho($nomeTamanho, $idproduto, $datadecadastro)
    {
        try {
            $pdo = new pdo('mysql:host=' . HOST_BD . ';dbname=' . BD_BD, USR_BD, PW_BD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec("set names utf8");
        } catch (PDOException $erro) {
            echo "Erro na Conexão" . $erro->getMessage();
        }
        try {
            $stmt = $pdo->prepare("INSERT INTO tamanhoproduto (nometamanhoproduto, idproduto, datahoracadastro) VALUES (:nometamanhoproduto, :idproduto, :datahoracadastro)");

            $stmt->bindParam(':nometamanhoproduto', $nomeTamanho);
            $stmt->bindParam(':idproduto',  $idproduto);
            $stmt->bindParam(':datahoracadastro', $datadecadastro);


            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                return "OK";
            }
        } catch (PDOException $erro) {
            echo "Erro:  " . $erro->getMessage();
        }
    }

    function inserirImagens($imagens, $idproduto, $datahoracadastro)
    {
        try {
            $pdo = new pdo('mysql:host=' . HOST_BD . ';dbname=' . BD_BD, USR_BD, PW_BD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec("set names utf8");
        } catch (PDOException $erro) {
            echo "Erro na Conexão" . $erro->getMessage();
        }
        try {

            foreach ($imagens['tmp_name'] as $key => $tmp_name) {
                $imagemNome = $imagens['name'][$key];
                $imagemTipo = $imagens['type'][$key];
                $imagemTamanho = $imagens['size'][$key];
                $imagemTmpNome = $imagens['tmp_name'][$key];

                $diretorioDestino = dirname(__FILE__) . '../src/img/';


                $nomeArquivo = uniqid('imagem_') . '.' . pathinfo($imagemNome, PATHINFO_EXTENSION);

                if (move_uploaded_file($imagemTmpNome, $diretorioDestino . $nomeArquivo)) {

                    $stmt = $pdo->prepare("INSERT INTO imagemproduto (idproduto, nomeimagem, datahoracadastro) VALUES (:idproduto, :nomeimagem, :datahoracadastro)");
                    $stmt->bindParam(':idproduto', $idproduto);
                    $stmt->bindParam(':nomeimagem', $nomeArquivo);
                    $stmt->bindParam(':datahoracadastro', $datahoracadastro);
                    $stmt->execute();
                }
            }
        } catch (PDOException $erro) {
            echo "Erro:  " . $erro->getMessage();
        }
    }

    function inseririmagemCarrossel($imagensCarrossel, $nomeimagemCarrossel, $datadecadastro)
    {
        try {
            $pdo = new pdo('mysql:host=' . HOST_BD . ';dbname=' . BD_BD, USR_BD, PW_BD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec("set names utf8");
        } catch (PDOException $erro) {
            echo "Erro na Conexão" . $erro->getMessage();
        }
        try {

            foreach ($imagensCarrossel['tmp_name'] as $key => $tmp_name) {
                $imagemNome = $imagensCarrossel['name'][$key];
                $imagemTipo = $imagensCarrossel['type'][$key];
                $imagemTamanho = $imagensCarrossel['size'][$key];
                $imagemTmpNome = $imagensCarrossel['tmp_name'][$key];

                $diretorioDestino = dirname(__FILE__) . '/../src/img/';


                $nomeArquivo = uniqid('imagem_') . '.' . pathinfo($imagemNome, PATHINFO_EXTENSION);

                if (move_uploaded_file($imagemTmpNome, $diretorioDestino . $nomeArquivo)) {

                    $stmt = $pdo->prepare("INSERT INTO carrossel (nomeimagemcarrossel, datadecadastro) VALUES (:nomeimagemcarrossel, :datadecadastro)");
                    $stmt->bindParam(':nomeimagemcarrossel', $nomeArquivo);
                    $stmt->bindParam(':datadecadastro', $datadecadastro);
                    $stmt->execute();
                }
            }
        } catch (PDOException $erro) {
            echo "Erro:  " . $erro->getMessage();
        }
    }
    function inserirProdutoCarrinho($idproduto)
    {
        try {
            $pdo = new pdo('mysql:host=' . HOST_BD . ';dbname=' . BD_BD, USR_BD, PW_BD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec("set names utf8");
        } catch (PDOException $erro) {
            echo "Erro na Conexão" . $erro->getMessage();
        }
        try {
            $stmt = $pdo->prepare("INSERT INTO carrinho (idproduto) VALUES (:idproduto)");

           
            $stmt->bindParam(':idproduto',  $idproduto);



            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $resultadoInsert = "OK";
                header('location: /Projeto/index.php#anchorret');
                exit;
            }
        } catch (PDOException $erro) {
            echo "Erro:  " . $erro->getMessage();
        }
    }
    function inserirProduto2Carrinho($idproduto)
    {
        try {
            $pdo = new pdo('mysql:host=' . HOST_BD . ';dbname=' . BD_BD, USR_BD, PW_BD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec("set names utf8");
        } catch (PDOException $erro) {
            echo "Erro na Conexão" . $erro->getMessage();
        }
        try {
            $stmt = $pdo->prepare("INSERT INTO carrinho (idproduto) VALUES (:idproduto)");

           
            $stmt->bindParam(':idproduto',  $idproduto);



            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $resultadoInsert = "OK";
                header('location: /Projeto/produtosPagina2.php#anchorret');
                exit;
            }
        } catch (PDOException $erro) {
            echo "Erro:  " . $erro->getMessage();
        }
    }
}
