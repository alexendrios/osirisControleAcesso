<?php

require_once '../model/Usuario.php';
require_once '../conexao/Conexao.php';

class UsuarioDAO extends Conexao {

    public function cadastrar(Usuario $usu) {

        $con = $this->getConection();
        $nome = $usu->getNome();
        $matricula = $usu->getMatricula();
        $cargo = $usu->getCargo();
        $obs = $usu->getObs();

        $sql = "INSERT INTO tb_usuario(nome, matricula, cargo, observacoes) VALUES (?,?,?,?)";

        $stm = $con->prepare($sql);
        $stm->bindParam(1, $nome);
        $stm->bindParam(2, $matricula);
        $stm->bindParam(3, $cargo);
        $stm->bindParam(4, $obs);
        $stm->execute();
        $id = $con->lastInsertId();

        $senha = $usu->getSenha();
        $tipoSenha = $usu->getTipoSenha();
        $sql2 = "INSERT INTO tb_senha(id, senha,tipo_senha) VALUES (?,?,?)";
        $stm = $con->prepare($sql2);
        $stm->bindParam(1, $id);
        $stm->bindParam(2, $senha);
        $stm->bindParam(3, $tipoSenha);
        $stm->execute();

        $naj = $usu->getNaj();
        $sql3 = "INSERT INTO tb_naj(id, naj) VALUES (?,?)";
        $stm = $con->prepare($sql3);
        $stm->bindParam(1, $id);
        $stm->bindParam(2, $naj);
        $stm->execute();     
        
    }

    public function deletar(Usuario $usu) {
        $id = $usu->getId();

        $con = $this->getConection();
        $sql = 'delete FROM  tb_usuario where id = ?';
        $stm = $con->prepare($sql);
        $stm->bindParam(1, $id);
        $stm->execute();

        $sql2 = 'delete FROM  tb_senha where id = ?';
        $stm = $con->prepare($sql2);
        $stm->bindParam(1, $id);
        $stm->execute();

        $sql3 = 'delete FROM  tb_naj where id = ?';
        $stm = $con->prepare($sql3);
        $stm->bindParam(1, $id);
        $stm->execute();
    }
    
    public function atualizar(Usuario $usu){
        
        $con = $this->getConection();
        $id = $usu->getId();
        $nome = $usu->getNome();
        $matricula = $usu->getMatricula();
        $cargo = $usu->getCargo();
        $obs = $usu->getObs();
        
        $sql = "update tb_usuario set nome = ?, matricula = ?, cargo = ?, observacoes = ? where id = ?";
        
        $stm = $con->prepare($sql);
        $stm->bindParam(1, $nome);
        $stm->bindParam(2, $matricula);
        $stm->bindParam(3, $cargo);
        $stm->bindParam(4, $obs);
        $stm->bindParam(5, $id);
        $stm->execute();
        
        
        $senha = $usu->getSenha();
        $tipoSenha = $usu->getTipoSenha();
        $sql2 = "update tb_senha set senha = ?, tipo_senha = ? where id = ?";
        
        $stm = $con->prepare($sql2);
        
        $stm->bindParam(1, $senha);
        $stm->bindParam(2, $tipoSenha);
        $stm->bindParam(3, $id);
        $stm->execute();
        
        $naj = $usu->getNaj();
        $sql3 = "update tb_naj set naj = ? where id = ?";
        
        $stm = $con->prepare($sql3);
        
        $stm->bindParam(1, $naj);
        $stm->bindParam(2, $id);
        $stm->execute();
        
    }

}
