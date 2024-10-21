<?php
    require 'funcoes/produtos.php';

    if (isset($_GET['produto'])) {
        $nomeDoProduto = $_GET['produto'];

        echo buscarProduto($nomeDoProduto, $listaDeProdutos);
    }
?>
