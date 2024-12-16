<?php
    session_start();

    if (!isset($_SESSION['produtos']) || empty($_SESSION['produtos'])) {
        echo "Nenhum produto encontrado para exportar.";
        exit;
    }

    // Configurações do novo arquivo CSV
    $nomeArquivo = 'exportarProdutos.csv';
    
    // Faz o conteudo da resposta HTTP retornar um csv
    header('Content-Type: text/csv');
    // Faz com que o navegador trate o conteúdo como um arquivo a ser baixado e define o nome do arquivo.
    header('Content-Disposition: attachment; filename="' . $nomeArquivo . '"'); 

    // abri o PHP para modo de escrita em algum determinado tipo de arquivo
    $chaveDeAcessoAoArquivo = fopen('php://output', 'w');

    // Adiciona cabeçalho ao arquivo CSV, usando a função fputcsv para converter o array em uma linha de texto
    fputcsv($chaveDeAcessoAoArquivo, ['Nome', 'Preço', 'Quantidade']);

    // Adiciona os produtos no arquivo CSV
    foreach ($_SESSION['produtos'] as $produto) {
        fputcsv($chaveDeAcessoAoArquivo, [$produto['nome'], $produto['preco'], $produto['quantidade']]);
    }

    fclose($chaveDeAcessoAoArquivo); // fecha o arquivo
    exit;
?>
