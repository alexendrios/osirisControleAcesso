<?php

require_once './Usuario.php';

class Login extends Usuario {

    private $login;

    function getLogin() {
        return $this->login;
    }

    function setLogin($login) {
        $this->login = strtoupper($login);
    }

}
