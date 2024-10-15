<?php

function validarSeProdutoConstaNoEstoque($produtoEscolhido, $quantidadeEscolhida, $estoqueDeProdutos){
    $produtoEncontrado = false;

    foreach ($estoqueDeProdutos as $nomeDoProduto => $quantidadeEmEstoque) {
        if ($produtoEscolhido == $nomeDoProduto) {
            $produtoEncontrado = true;

            if ($quantidadeEmEstoque == 0) {
                echo "O produto informado não consta no estoque";
            } elseif ($quantidadeEmEstoque >= $quantidadeEscolhida) {
                echo "O produto informado está disponível para compra";
                $quantidadeEmEstoque -= $quantidadeEscolhida;
            } else {
                echo "A quantidade que você deseja comprar é maior do que tem disponível em estoque";
            }
            break;
        }
    }

    if (!$produtoEncontrado) {
        echo "O produto informado não consta no estoque";
    }
}
