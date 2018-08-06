<?php
include ('../service/verificaSessao.php');
require_once '../model/Usuario.php';
require_once '../controller/UsuarioDAO.php';
require_once '../conexao/Conexao.php';

$usuario = new Usuario();

$id = $_GET['id'];
$conn = new Conexao();
$pr = $conn->getConection();
$dados = "select  tb_usuario.id, tb_usuario.nome, tb_usuario.matricula, "
        . "tb_usuario.cargo, tb_usuario.observacoes,tb_senha.senha,"
        . "tb_senha.tipo_senha,tb_naj.naj "
        . "from tb_usuario inner join tb_senha on tb_usuario.id = tb_senha.id "
        . "inner join tb_naj on tb_usuario.id = tb_naj.id where tb_usuario.id ='$id'";
$st = $pr->prepare($dados);
$st->execute();
$res = $st->fetch();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastro de Semhas</title>

        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/blocos.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/estilho_thommy.css">
    </head>
    <body>
        <form class="form-horizontal" method="post" action="" >
            <!--Edição -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h2>Dados Referente ao Cadastrado</h2></div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">Nome</span>
                                        <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome" aria-describedby="basic-addon1"
                                               readonly value="<?php echo $res['nome']?>" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">Matrícula</span>
                                        <input type="text" id="matricula" name="matricula" class="form-control" placeholder="Matrícula" aria-describedby="basic-addon1"
                                               readonly value="<?php echo $res['matricula']?>" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">NAJ</span>
                                        <input type="text" id="naj" name="naj" class="form-control" placeholder="NAJ" aria-describedby="basic-addon1"
                                               readonly value="<?php echo $res['naj']?>" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">Cargo</span>
                                        <input type="text" id="cargo" name="cargo" class="form-control" placeholder="Cargo" aria-describedby="basic-addon1"
                                               readonly value="<?php echo $res['cargo']?>" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">Senha</span>
                                        <input type="text" id="senha" name="senha" class="form-control" placeholder="********" aria-describedby="basic-addon1"
                                               readonly value="<?php echo $res['senha']?>" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">Tipo de Acesso</span>
                                        <input type="text" id="tipoAcesso" name="tipoAcesso" class="form-control" placeholder="Tipo de Acesso" aria-describedby="basic-addon1"
                                               readonly value="<?php echo $res['tipo_senha']?>" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">Observação</span>
                                        <textarea id="observacao" name="observacao" class="form-control" placeholder="Observação" aria-describedby="basic-addon1" readonly>
                                            <?php echo $res['observacoes']?>
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fim Edição -->
            <!-- BOTÕES -->
            <center>
                <div class="btn-group">
                    <a class="btn btn-default" href="../view/listar.php" role="button">Voltar</a>
                </div>
            </center>
        </form>
    </body>
</html>