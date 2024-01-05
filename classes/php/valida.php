<?php

require_once '../conexao.php';

$login = $_POST['email'];
$login = strtoupper($login);
$senha = $_POST['senha'];

$login = stripslashes($login);
$senha = stripslashes($senha);

class busca
{
    function selecionarUsuario($login, $senha)
    {
        try {
            $pdo = new pdo('mysql:host=' . HOST_BD . ';dbname=' . BD_BD, USR_BD, PW_BD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec("set names utf8");
        } catch (PDOException $erro) {
            echo "Erro na Conexão" . $erro->getMessage();
        }
        try {
            $stmt = $pdo->prepare("SELECT 
                COUNT(idusuario) as qtd 
                FROM usuario 
                WHERE loginusuario = :loginusuario 
                AND senhausuario = :senhausuario");

            $stmt->bindParam(':loginusuario', $login);
            $stmt->bindParam(':senhausuario', $senha);

            if ($stmt->execute()) {
                $res = $stmt->fetch(PDO::FETCH_OBJ);
                return $res;
            } else {
                throw new PDOException("Erro: Não foi possivel executar a consulta de usuario");
            }
        } catch (PDOException $erro) {
            echo "Erro: " . $erro->getMessage();
        }
    }
}

$acao = new busca();
$result = $acao ->selecionarUsuario($login, $senha);
$id = $result->qtd;

if($id>=1){
    session_start();
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    header("Location: ../../table.php"); exit;
} else{
    echo "Login ou senha incorretos!!!";
}
