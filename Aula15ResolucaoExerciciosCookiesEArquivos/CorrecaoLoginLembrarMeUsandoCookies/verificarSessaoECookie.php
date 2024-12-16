<?php
session_start();
/*
Se não existir uma sessão ativa, mas existir um cookie válido, pegamos o valor do cookie e usamos para reativar a sessão."
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
