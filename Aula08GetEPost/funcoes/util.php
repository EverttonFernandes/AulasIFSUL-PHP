<?php
    function exibirProdutos($listaDeProdutos) {
        echo "<h3>Lista de Produtos Atualizada</h3>";
        foreach ($listaDeProdutos as $nome => $preco) {
            echo "Produto: $nome - Preço: R$" . number_format($preco, 2, ',', '.') . "<br>";
        }
    }
?>
