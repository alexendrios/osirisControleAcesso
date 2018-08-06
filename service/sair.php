<?php

if (isset($_GET['acao']) == 'sair') {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Você saiu do Sistema')
    window.location.href='../index.php';
    </SCRIPT>");
    session_start();
    session_destroy();
}

