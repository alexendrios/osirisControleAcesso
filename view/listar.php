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
        <?php
        require_once '../model/Usuario.php';
        require_once '../controller/UsuarioDAO.php';
        require_once '../conexao/Conexao.php';
        include ('../service/verificaSessao.php');

        $usuario = new Usuario();
        $usuarioDao = new UsuarioDAO;
        $con = new Conexao();

        $sql = "select  tb_usuario.id, tb_usuario.nome, tb_usuario.matricula, "
                . "tb_usuario.cargo, tb_usuario.observacoes,tb_senha.senha,"
                . "tb_senha.tipo_senha,tb_naj.naj "
                . "from tb_usuario inner join tb_senha on tb_usuario.id = tb_senha.id "
                . "inner join tb_naj on tb_usuario.id = tb_naj.id";

        $con = $con->getConection();
        $stm = $con->prepare($sql);
        $stm->execute();
        $result = $stm->fetchAll();
        ?>
    </head>
    <body>
         <?php
           require_once './nav.php';
        ?>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">	
                        <a class="btn btn-info" href="cadastrar.php" role="button">Novo Usuário</a>
                    </div>
                </div>
            </div>
        </div>
        <form class="form-horizontal" method="post" action="editar.php" >
            <!--Lista -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">		
                            <table  class="table table-striped table-bordered" cellspacing="ss0" width="100%">
                                <thead>
                                    <tr>
                                        <th class="actions">Ações</th>
                                        <th>Nome</th>
                                        <th>Matricula</th>      
                                        <th>NAJ</th>
                                        <th>Cargo</th>
                                        <th>Tipo de Acesso</th>
                                        <th>Senha</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    header('content-type:text/html; charset=utf-8');
                                    foreach ($result as $lista) {

                                        $usuario->setId($lista['id']);
                                        $usuario->setNome($lista['nome']);
                                        $usuario->setMatricula($lista['matricula']);
                                        $usuario->setCargo($lista['cargo']);
                                        $usuario->setObs($lista['observacoes']);
                                        $usuario->setSenha($lista['senha']);
                                        $usuario->setTipoSenha($lista['tipo_senha']);
                                        $usuario->setNaj($lista['naj']);
                                        ?>
                                        <tr>
                                            <td align="center">
                                                <a class="btn btn-info" href="visualizar.php?id=<?= $usuario->getId() ?>">
                                                    <i class="glyphicon glyphicon-search" title="Dados do usuário" ></i>
                                                </a>
                                                <a class="btn btn-success" href="editar.php?id=<?= $usuario->getId() ?>">
                                                    <i class="glyphicon glyphicon-pencil" title="Editar Dados"></i>
                                                </a>
                                                <a class="btn btn-danger" href="../service/excluindo.php?id=<?= $usuario->getId() ?>">
                                                    <i onclick="return confirm('Tem certeza que deseja deletar <?= $usuario->getNome() ?> do registro?'); return false;" title="Excluir Registro">
                                                        <em class="glyphicon glyphicon-trash" ></em>

                                                    </i>
                                                </a>
                                            </td>
                                            <td><?php echo $usuario->getNome() ?></td>                    
                                            <td><?php echo $usuario->getMatricula() ?></td>
                                            <td><?php echo $usuario->getNaj() ?></td>
                                            <td><?php echo $usuario->getCargo() ?></td>
                                            <td><?php echo $usuario->getTipoSenha() ?></td>
                                            <td><?php echo $usuario->getSenha() ?></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>