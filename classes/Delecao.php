<?php 

require_once 'conexao.php';

class Delecao{

    function deletarProduto($idproduto){

        try{
            $pdo = new pdo('mysql:host=' . HOST_BD . ';dbname=' . BD_BD, USR_BD, PW_BD);
            $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
            $pdo -> exec("set names utf8");
        } catch (PDOException $erro){
            echo "Erro na conexão". $erro -> getMessage();
        }

        try{
            //prepara a instrução SQL para excluir  um registro
            $stmt = $pdo -> prepare ("DELETE FROM produtos WHERE idproduto = :idproduto");

            //vincula os paremetros da instrução SQL aos valores dos dados a serem adicionados
            $stmt -> bindParam (":idproduto", $idproduto);

            //executa a instrução SQL
            $stmt -> execute();

            //se apagar o registro, volta para a tela de lista de usuario
            if($stmt -> rowCount() > 0){
                $resultadoUpdate ="OK";
                header("location: /Projeto/classes/sucessoApagar.php");
                exit;
            }
        } catch(PDOException $e){
            echo "Falha na conexão: ". $e -> getMessage();
        }
    }

    function deletarimagemCarrossel($idimagemCarrossel){

        try{
            $pdo = new pdo('mysql:host=' . HOST_BD . ';dbname=' . BD_BD, USR_BD, PW_BD);
            $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
            $pdo -> exec("set names utf8");
        } catch (PDOException $erro){
            echo "Erro na conexão". $erro -> getMessage();
        }

        try{
            //prepara a instrução SQL para excluir  um registro
            $stmt = $pdo -> prepare ("DELETE FROM carrossel WHERE idimagemcarrossel = :idimagemcarrossel");

            //vincula os paremetros da instrução SQL aos valores dos dados a serem adicionados
            $stmt -> bindParam (":idimagemcarrossel", $idimagemCarrossel);

            //executa a instrução SQL
            $stmt -> execute();

            //se apagar o registro, volta para a tela de lista de usuario
            if($stmt -> rowCount() > 0){
                $resultadoUpdate ="OK";
                header("location: /Projeto/classes/sucessoApagarCarrossel.php");
                exit;
            }
        } catch(PDOException $e){
            echo "Falha na conexão: ". $e -> getMessage();
        }
    }

    function deletarprodutoCarrinho($idprodutocarrinho){

        try{
            $pdo = new pdo('mysql:host=' . HOST_BD . ';dbname=' . BD_BD, USR_BD, PW_BD);
            $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
            $pdo -> exec("set names utf8");
        } catch (PDOException $erro){
            echo "Erro na conexão". $erro -> getMessage();
        }

        try{
            //prepara a instrução SQL para excluir  um registro
            $stmt = $pdo -> prepare ("DELETE FROM carrinho WHERE idprodutocarrinho = :idprodutocarrinho");

            //vincula os paremetros da instrução SQL aos valores dos dados a serem adicionados
            $stmt -> bindParam (":idprodutocarrinho", $idprodutocarrinho);

            //executa a instrução SQL
            $stmt -> execute();

            //se apagar o registro, volta para a tela de lista de usuario
            if($stmt -> rowCount() > 0){
                $resultadoUpdate ="OK";
                header("location: /Projeto/carrinho.php");
                exit;
            }
        } catch(PDOException $e){
            echo "Falha na conexão: ". $e -> getMessage();
        }
    }

    function deletarprodutoCarrinho2($idprodutocarrinho){

        try{
            $pdo = new pdo('mysql:host=' . HOST_BD . ';dbname=' . BD_BD, USR_BD, PW_BD);
            $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
            $pdo -> exec("set names utf8");
        } catch (PDOException $erro){
            echo "Erro na conexão". $erro -> getMessage();
        }

        try{
            //prepara a instrução SQL para excluir  um registro
            $stmt = $pdo -> prepare ("DELETE FROM carrinho WHERE idprodutocarrinho = :idprodutocarrinho");

            //vincula os paremetros da instrução SQL aos valores dos dados a serem adicionados
            $stmt -> bindParam (":idprodutocarrinho", $idprodutocarrinho);

            //executa a instrução SQL
            $stmt -> execute();

            //se apagar o registro, volta para a tela de lista de usuario
            if($stmt -> rowCount() > 0){
                $resultadoUpdate ="OK";
                header("location: /Projeto/carrinhoProdutos.php");
                exit;
            }
        } catch(PDOException $e){
            echo "Falha na conexão: ". $e -> getMessage();
        }
    }
    
}