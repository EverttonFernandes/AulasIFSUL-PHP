<?php
session_start();

/*
...Se a sessão não estiver ativa e o cookie também, o usuário é redirecionado a página inicial login.html
*/
if (!isset($_SESSION['usuario'])) {
    if (isset($_COOKIE['usuario'])) {
        $_SESSION['usuario'] = $_COOKIE['usuario'];
    } else {
        header('Location: login.html');
        exit;
    }
}
?>
