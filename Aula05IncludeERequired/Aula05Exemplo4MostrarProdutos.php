<?php
// Array de produtos em memória
$produtos = [
    ["nome" => "Celular", "preco" => 3500],
    ["nome" => "Notebook", "preco" => 4500]
];

// Função para exibir a lista de produtos
function exibirProdutos($produtos) {
    echo "<h2>Lista de Produtos:</h2>";
    foreach ($produtos as $produto) {
        echo "Produto: " . $produto['nome'] . " - Preço: R$" . $produto['preco'] . "<br>";
    }
}
?>
