<?php
    require_once 'catalogo.php';
    require_once 'verificarEstoque.php';

    $produto = $_GET['produto'];

    if (verificarEstoque($produto, $catalogo)) {
        echo "O produto '$produto' está disponível no estoque por R$ " . $catalogo[$produto] . ".<br>";
    } else {
        echo "O produto '$produto' não está disponível no estoque.<br>";
    }
?>
