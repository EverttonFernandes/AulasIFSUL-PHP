<?php
    // Função para adicionar um ou mais produtos ao array de produtos
    function adicionarProdutos($produtos, $novosProdutos) {
        foreach ($novosProdutos as $produto) {
            $produtos[] = ["nome" => $produto['nome'], "preco" => $produto['preco']];
        }
        return $produtos;  // Retorna o array de produtos atualizado
    }
?>
