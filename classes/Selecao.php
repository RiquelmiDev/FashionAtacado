<?php

require_once 'conexao.php';

class Selecao
{

    function selecionarUsuario()
    {

        //caso ocorra algum erro de conexão com o banco de dados, uma mensagem de erro sera exibida na tela
        try {
            $pdo = new pdo('mysql:host=' . HOST_BD . ';dbname=' . BD_BD, USR_BD, PW_BD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec("set names utf8");
        } catch (PDOException $erro) {
            echo "Erro na conexão" . $erro->getMessage();
        }
        try {
            $stmt = $pdo->prepare("SELECT idproduto, idusuario, idmarca, datadecadastro, nomeproduto, qtdestoque, valorproduto, observacaoproduto, imagemproduto, infocompra FROM produtos");

            if ($stmt->execute()) {
                $res = $stmt->fetchALL(PDO::FETCH_ASSOC);
                return $res;
            } else {
                throw new PDOException("Erro: Não foi possivel executar a declaração sql da função selecionarProdutos");
            }
        } catch (PDOException $erro) {
            echo "Erro " . $erro->getMessage();
        }
    }

    function selecionarProdutos()
    {

        //caso ocorra algum erro de conexão com o banco de dados, uma mensagem de erro sera exibida na tela
        try {
            $pdo = new pdo('mysql:host=' . HOST_BD . ';dbname=' . BD_BD, USR_BD, PW_BD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec("set names utf8");
        } catch (PDOException $erro) {
            echo "Erro na conexão" . $erro->getMessage();
        }
        try {
            $stmt = $pdo->prepare("SELECT 
            produtos.idproduto,  
            produtos.idusuario,
            marcaproduto.nomemarca as nomemarca, 
            produtos.datadecadastro, 
            produtos.nomeproduto, 
            produtos.qtdestoque, 
            produtos.valorproduto, 
            produtos.observacaoproduto, 
            produtos.imagemproduto, 
            produtos.infocompra
            FROM 
            produtos 
            LEFT JOIN 
            marcaproduto ON produtos.idmarca = marcaproduto.idmarca
            ");

            if ($stmt->execute()) {
                $res = $stmt->fetchALL(PDO::FETCH_ASSOC);
                return $res;
            } else {
                throw new PDOException("Erro: Não foi possivel executar a declaração sql da função selecionarProdutos");
            }
        } catch (PDOException $erro) {
            echo "Erro " . $erro->getMessage();
        }
    }

    function selecionarMarca()
    {

        //caso ocorra algum erro de conexão com o banco de dados, uma mensagem de erro sera exibida na tela
        try {
            $pdo = new pdo('mysql:host=' . HOST_BD . ';dbname=' . BD_BD, USR_BD, PW_BD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec("set names utf8");
        } catch (PDOException $erro) {
            echo "Erro na conexão" . $erro->getMessage();
        }
        try {
            $stmt = $pdo->prepare("SELECT idmarca,  nomemarca FROM marcaproduto");

            if ($stmt->execute()) {
                $res = $stmt->fetchALL(PDO::FETCH_ASSOC);
                return $res;
            } else {
                throw new PDOException("Erro: Não foi possivel executar a declaração sql da função selecionarMarca");
            }
        } catch (PDOException $erro) {
            echo "Erro " . $erro->getMessage();
        }
    }

    function selecionarProdutosUnico($idProduto)
    {

        //caso ocorra algum erro de conexão com o banco de dados, uma mensagem de erro sera exibida na tela
        try {
            $pdo = new pdo('mysql:host=' . HOST_BD . ';dbname=' . BD_BD, USR_BD, PW_BD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec("set names utf8");
        } catch (PDOException $erro) {
            echo "Erro na conexão" . $erro->getMessage();
        }
        try {
            $stmt = $pdo->prepare("SELECT 
            produtos.idproduto, 
            produtos.idusuario,
            marcaproduto.nomemarca as nomemarca, 
            produtos.datadecadastro, 
            produtos.nomeproduto, 
            produtos.qtdestoque, 
            produtos.valorproduto, 
            produtos.observacaoproduto, 
            produtos.imagemproduto, 
            produtos.idmarca,
            produtos.infocompra
            FROM 
            produtos 
            LEFT JOIN 
            marcaproduto ON produtos.idmarca = marcaproduto.idmarca
            WHERE idproduto = :idproduto");

            $stmt->bindParam(':idproduto', $idProduto);

            if ($stmt->execute()) {
                $res = $stmt->fetch(PDO::FETCH_OBJ);
                return $res;
            } else {
                throw new PDOException("Erro: Não foi possivel executar a declaração sql da função selecionarProdutos");
            }
        } catch (PDOException $erro) {
            echo "Erro " . $erro->getMessage();
        }
    }

    function selecionarTamanhoProduto($idProduto)
    {
        try {
            $pdo = new pdo('mysql:host=' . HOST_BD . ';dbname=' . BD_BD, USR_BD, PW_BD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec("set names utf8");
        } catch (PDOException $erro) {
            echo "Erro na conexão" . $erro->getMessage();
        }

        try {
            $stmt = $pdo->prepare("SELECT 
            idtamanho, 
            nometamanhoproduto,
            idproduto 
            FROM 
            tamanhoproduto
          
            WHERE idproduto = :idproduto");

            $stmt->bindParam(':idproduto', $idProduto);

            if ($stmt->execute()) {
                $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $res;
            } else {
                throw new PDOException("Erro: Não foi possivel executar a declaração sql da função selecionarTamanhoProduto");
            }
        } catch (PDOException $erro) {
            echo "Erro " . $erro->getMessage();
        }
    }

    function ultimosProdutos()
    {
        try {
            $pdo = new pdo('mysql:host=' . HOST_BD . ';dbname=' . BD_BD, USR_BD, PW_BD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec("set names utf8");
        } catch (PDOException $erro) {
            echo "Erro na conexão" . $erro->getMessage();
        }

        try {
            $stmt = $pdo->prepare("SELECT idproduto, nomeproduto, valorproduto, valorproduto, imagemproduto, infocompra FROM produtos ORDER BY datadecadastro DESC");



            if ($stmt->execute()) {
                $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $res;
            } else {
                throw new PDOException("Erro: Não foi possivel executar a declaração sql da função ultimosProdutos");
            }
        } catch (PDOException $erro) {
            echo "Erro " . $erro->getMessage();
        }
    }

    function ultimosProdutos2()
    {
        try {
            $pdo = new pdo('mysql:host=' . HOST_BD . ';dbname=' . BD_BD, USR_BD, PW_BD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec("set names utf8");
        } catch (PDOException $erro) {
            echo "Erro na conexão" . $erro->getMessage();
        }

        try {
            $stmt = $pdo->prepare("SELECT idproduto, nomeproduto, valorproduto, valorproduto, imagemproduto, infocompra FROM produtos ORDER BY datadecadastro DESC LIMIT 6");



            if ($stmt->execute()) {
                $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $res;
            } else {
                throw new PDOException("Erro: Não foi possivel executar a declaração sql da função ultimosProdutos");
            }
        } catch (PDOException $erro) {
            echo "Erro " . $erro->getMessage();
        }
    }


    function Carrossel()
    {
        try {
            $pdo = new pdo('mysql:host=' . HOST_BD . ';dbname=' . BD_BD, USR_BD, PW_BD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec("set names utf8");
        } catch (PDOException $erro) {
            echo "Erro na conexão" . $erro->getMessage();
        }

        try {
            $stmt = $pdo->prepare("SELECT nomeimagemcarrossel FROM carrossel ORDER BY datadecadastro DESC LIMIT 4");



            if ($stmt->execute()) {
                $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $res;
            } else {
                throw new PDOException("Erro: Não foi possivel executar a declaração sql da função Carrossel");
            }
        } catch (PDOException $erro) {
            echo "Erro " . $erro->getMessage();
        }
    }

    function selecionarimagemCarrossel()
    {

        //caso ocorra algum erro de conexão com o banco de dados, uma mensagem de erro sera exibida na tela
        try {
            $pdo = new pdo('mysql:host=' . HOST_BD . ';dbname=' . BD_BD, USR_BD, PW_BD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec("set names utf8");
        } catch (PDOException $erro) {
            echo "Erro na conexão" . $erro->getMessage();
        }
        try {
            $stmt = $pdo->prepare("SELECT 
            idimagemcarrossel, 
            nomeimagemcarrossel, 
            datadecadastro
            FROM 
            carrossel");

            if ($stmt->execute()) {
                $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $res;
            } else {
                throw new PDOException("Erro: Não foi possivel executar a declaração sql da função selecionarimagemCarrossel");
            }
        } catch (PDOException $erro) {
            echo "Erro " . $erro->getMessage();
        }
    }

    function selecionarimagemCarrinho()
    {

        //caso ocorra algum erro de conexão com o banco de dados, uma mensagem de erro sera exibida na tela
        try {
            $pdo = new pdo('mysql:host=' . HOST_BD . ';dbname=' . BD_BD, USR_BD, PW_BD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec("set names utf8");
        } catch (PDOException $erro) {
            echo "Erro na conexão" . $erro->getMessage();
        }
        try {
            $stmt = $pdo->prepare("SELECT 
            carrinho.idprodutocarrinho, 
            produtos.nomeproduto,
            produtos.valorproduto,
            produtos.imagemproduto 
            FROM 
            carrinho as carrinho
            JOIN produtos as produtos ON carrinho.idproduto = produtos.idproduto
            ");

            if ($stmt->execute()) {
                $res = $stmt->fetchALL(PDO::FETCH_ASSOC);
                return $res;
            } else {
                throw new PDOException("Erro: Não foi possivel executar a declaração sql da função selecionarProdutos");
            }
        } catch (PDOException $erro) {
            echo "Erro " . $erro->getMessage();
        }
    }
}
