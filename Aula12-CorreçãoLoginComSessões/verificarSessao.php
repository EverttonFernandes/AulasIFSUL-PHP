<?php
session_start();
/*
...Se a sessão não estiver ativa, o usuário é redirecionado a página inicial login.html
*/
if (!isset($_SESSION['usuario'])) {
    header('Location: login.html');
    exit;
}
?>
