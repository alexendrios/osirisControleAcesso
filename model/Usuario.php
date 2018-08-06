<?php

class Usuario {

    private $id;
    private $nome;
    private $matricula;
    private $cargo;
    private $naj;
    private $senha;
    private $tipoSenha;
    private $obs;

    function getNome() {
        return $this->nome;
    }

    function getMatricula() {
        return $this->matricula;
    }

    function getNaj() {
        return $this->naj;
    }

    function getSenha() {
        return $this->senha;
    }

    function getTipoSenha() {
        return $this->tipoSenha;
    }

    function getObs() {
        return $this->obs;
    }

    function setNome($nome) {
        $this->nome = strtoupper($nome);
    }

    function setMatricula($matricula) {
        $this->matricula = strtoupper($matricula);
    }

    function setNaj($naj) {
        $this->naj = strtoupper($naj);
    }

    function setSenha($senha) {
        $this->senha = strtoupper($senha);
    }

    function setTipoSenha($tipoSenha) {
        $this->tipoSenha = strtoupper($tipoSenha);
    }

    function setObs($obs) {
        $this->obs = strtoupper($obs);
    }

    function getCargo() {
        return $this->cargo;
    }

    function setCargo($cargo) {
        $this->cargo = strtoupper($cargo);
    }

    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

}
