<?php
    // Inclui os arquivos de produtos e funções
    require_once 'Aula05Exemplo4MostrarProdutos.php';
    require_once 'Aula05Exemplo4AdicionaProdutos.php';

    // Exibe os produtos iniciais
    exibirProdutos($produtos);

    // Definindo novos produtos para serem adicionados
    $novosProdutos = [
        ["nome" => "Tablet", "preco" => 800],
        ["nome" => "Ar condicionado", "preco" => 3200]
    ];

    // Adiciona a lista de novos produtos ao array de produtos existente
    $novaListaDeProdutos = adicionarProdutos($produtos, $novosProdutos);

    // Exibe a lista de produtos atualizada
    echo "<h2>Produtos Atualizados:</h2>";
    exibirProdutos($novaListaDeProdutos);
?>
