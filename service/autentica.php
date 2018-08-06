<?php

require_once '../conexao/Conexao.php';

$usuario = $_POST['login'];
$senha = $_POST['senha'];


$con = new Conexao();

$conexao = $con->getConection();
$sql = "SELECT * FROM tb_login ";
$logar = $conexao->prepare($sql);
$logar->execute();
$dados = $logar->fetchAll();

foreach ($dados as $lista) {
    $user = $lista['login'];
    $pass = $lista['senha'];
    $nome = $lista['nome'];
    
    if ($user == $usuario and $pass == $senha) {
        session_start();
        $_SESSION['userName'] = $nome;
        $_SESSION['login'] =  $user;

        header("Location: ../view/listar.php");
    } else {
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Usuário ou Senha Inválidos!')
        window.location.href='../index.php';
        </SCRIPT>");
    }
}
?>