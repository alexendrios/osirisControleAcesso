<?php

require_once '../model/Usuario.php';
require_once '../controller/UsuarioDAO.php';
require_once '../conexao/Conexao.php';

$usuario = new Usuario();
$usuario->setId($_POST['id']);
$usuario->setNome($_POST['nome']);
$usuario->setMatricula($_POST['matricula']);
$usuario->setCargo($_POST['cargo']);
$usuario->setNaj($_POST['naj']);
$usuario->setSenha($_POST['senha']);
$usuario->setTipoSenha($_POST['tipoAcesso']);
$usuario->setObs($_POST['observacao']);


$usuarioDao = new UsuarioDAO();
$usuarioDao->atualizar($usuario);

echo ("<SCRIPT LANGUAGE='JavaScript'>
window.alert('Dados Alterados com Sucesso!!!')
window.location.href='../view/listar.php';
</SCRIPT>");


    





