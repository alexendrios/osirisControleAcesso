<?php

require_once '../model/Usuario.php';
require_once '../controller/UsuarioDAO.php';
require_once '../conexao/Conexao.php';

$usuario = new Usuario();
$usuario->setId($_GET['id']);

$usuarioDao = new UsuarioDAO();
$usuarioDao->deletar($usuario);

header('Location: ../view/listar.php');


