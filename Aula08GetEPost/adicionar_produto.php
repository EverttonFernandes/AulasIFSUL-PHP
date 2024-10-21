<?php
    require 'funcoes/produtos.php';
    require 'funcoes/util.php';

    if (isset($_POST['novoProduto']) && isset($_POST['precoProduto'])) {
        $novoProduto = $_POST['novoProduto'];
        $precoProduto = (float) $_POST['precoProduto'];

        echo adicionarProduto($novoProduto, $precoProduto, $listaDeProdutos);
    }

    exibirProdutos($listaDeProdutos);
?>
