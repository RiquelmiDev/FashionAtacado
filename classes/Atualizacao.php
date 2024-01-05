<?php
require_once 'conexao.php';
class Atualizacao{
    function atualizarProduto($nomeproduto,$valorproduto,$qtdeproduto,$idmarcaproduto,$obsproduto, $idproduto, $infoCompra){
        try {
            $pdo = new pdo('mysql:host=' . HOST_BD . ';dbname=' . BD_BD, USR_BD, PW_BD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec("set names utf8");
        } catch (PDOException $erro) {
            echo "Erro na conexão:" . $erro->getMessage();
        }
        try{
           $stmt = $pdo->prepare("UPDATE produtos
           SET nomeproduto = :nomeproduto,
            valorproduto = :valorproduto,
            qtdestoque = :qtdestoque, 
            idmarca = :idmarca,
            observacaoproduto = :observacaoproduto,
            infocompra = :infocompra

             WHERE idproduto = :idproduto");
           
           
           $stmt->bindParam('nomeproduto', $nomeproduto);
           $stmt->bindParam('valorproduto', $valorproduto);
           $stmt->bindParam('qtdestoque', $qtdeproduto);
           $stmt->bindParam('idmarca', $idmarcaproduto);
           $stmt->bindParam('observacaoproduto', $obsproduto);
           $stmt->bindParam('idproduto', $idproduto);
           $stmt->bindParam('infocompra', $infoCompra);
           
           
           if ($stmt->execute()) {
            if ($stmt->rowCount() > 0){
                header('Location: /Projeto/table.php');
            } else{
                echo "Erro ao tentar atualizar o produto"; exit;
            } 

            } else{
                throw new PDOException("Erro: Não foi possivel executar a declaração sql da função selecionarMarca");
            }

           } catch(PDOException $erro) {
            echo "Erro ". $erro -> getMessage();
        }
        }
    }


?>


