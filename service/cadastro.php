<?php

echo '
    <style>
        .ref {
            background-color: rgba(0, 74, 14);
            color: white;
            padding-left: 30px;
            padding-right: 30px;
            padding-top: 5px;
            padding-bottom: 5px;
            margin-left: 20px;
        }
        .ref:link {
            color: white;
            text-decoration: none;
        }
        a:hover{
            background-color: #006400;
        }
    </style>
';

require_once '../model/Usuario.php';
require_once '../controller/UsuarioDAO.php';
require_once '../conexao/Conexao.php';

$status = false;
$id = null;
$usuMatricula = null;
$usuNome = null;

$conec = new Conexao();
$usuario = new Usuario();
$usuarioDao = new UsuarioDAO();

$usuario->setNome($_POST['nome']);
$usuario->setMatricula($_POST['matricula']);
$usuario->setCargo($_POST['cargo']);
$usuario->setNaj($_POST['naj']);
$usuario->setSenha($_POST['senha']);
$usuario->setTipoSenha($_POST['tipoAcesso']);
$usuario->setObs($_POST['observacao']);



$sql = "SELECT * FROM tb_usuario";
$st = $conec->getConection()->prepare($sql);
$st->execute();
$verif = $st->fetchAll();



foreach ($verif as $lista) {

    $id = $lista['id'];
    $usuMatricula = $lista['matricula'];
    $usuNome = $lista['nome'];
    $mat = $usuario->getMatricula();

    if ($usuMatricula === $mat) {
        $status = true;
        break;
    }
}

if ($status) {


    require_once '../view/nav_2.php';

    echo "Os dados a serem Cadastrados referente a <em><u>MATRÍCULA</u></em>: $usuMatricula<br/>"
    . "Já Existe, pois a mesma está vinculado ao <strong><u>USUÁRIO</u></strong>:  $usuNome"
    . "<br/><br/>Escolha uma das <strong>opções</strong>:<br/><br/>"
    . "<a class='ref' href='../view/editar.php?id=$id'>Editar os Dados da Matr.: $usuMatricula</a>"
    . "<br/><br/>"
    . "<a class='ref' href='../view/cadastrar.php'>Cadastrar um Novo Usuário</a>";

} else {

    $usuarioDao->cadastrar($usuario);
    echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('USUÁRIO Cadastrado com sucesso')
        window.location.href='../view/listar.php';
        </SCRIPT>");
}


