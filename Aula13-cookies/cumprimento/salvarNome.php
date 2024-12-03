<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];

    if (!empty($nome)) {
        // Define o cookie com o nome do visitante, válido por 1 dia
        setcookie('visitante', $nome, time() + 30, '/'); // 30 segundos
        header('Location: cumprimentar.php'); // Redireciona para cumprimentar.php
        exit;
    } else {
        header('Location: cumprimentar.php?erro=1'); // Caso o nome esteja vazio
        exit;
    }
}
?>
