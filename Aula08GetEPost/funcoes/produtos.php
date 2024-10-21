<?php
    $listaDeProdutos = [
        "Celular" => 1200.00,
        "Notebook" => 3500.00,
        "Tablet" => 800.00,
    ];

    function buscarProduto($nomeDoProduto, $listaDeProdutos) {
        if (isset($listaDeProdutos[$nomeDoProduto])) {
            return "Produto: $nomeDoProduto, Preço: R$" . number_format($listaDeProdutos[$nomeDoProduto], 2, ',', '.');
        } else {
            return "Produto não encontrado!";
        }
    }

    function adicionarProduto($novoProduto, $precoProduto, &$listaDeProdutos) {
        if (!empty($novoProduto) && !empty($precoProduto)) {
            $listaDeProdutos[$novoProduto] = $precoProduto;
            return "Produto adicionado com sucesso!";
        } else {
            return "Erro: Todos os campos devem ser preenchidos!";
        }
    }
?>
