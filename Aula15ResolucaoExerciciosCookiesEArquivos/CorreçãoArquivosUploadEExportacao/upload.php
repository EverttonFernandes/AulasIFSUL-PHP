<?php
session_start();

$arquivo = $_FILES['arquivo'];
$nomeTemporario = $arquivo['tmp_name'];
$extensao = strtolower(pathinfo($arquivo['name'], PATHINFO_EXTENSION));
$destinoProdutos = 'produtos.txt';

if ($extensao !== 'csv') {
    echo "Erro: Apenas arquivos CSV são permitidos.";
    exit;
}

if (($chaveDeAcessoAoArquivo = fopen($nomeTemporario, 'r')) !== false) {
    $listaDeProdutos = [];
    
    // Lê o arquivo linha por linha e armazena em um array
    while (($linhaDoArquivoCsv = fgetcsv($chaveDeAcessoAoArquivo, 1000, ',')) !== false) {
        if (count($linhaDoArquivoCsv) >= 3) { // Espera-se no mínimo: nome, preço, quantidade
            $listaDeProdutos[] = [
                'nome' => $linhaDoArquivoCsv[0],
                'preco' => $linhaDoArquivoCsv[1],
                'quantidade' => $linhaDoArquivoCsv[2]
            ];
        }
    }
    fclose($chaveDeAcessoAoArquivo);

    // Salva os produtos no arquivo produtos.txt
    $arquivoTxt = fopen($destinoProdutos, 'a');
    foreach ($listaDeProdutos as $produto) {
        fwrite($arquivoTxt, "{$produto['nome']},{$produto['preco']},{$produto['quantidade']}\n");
    }
    fclose($arquivoTxt);

    // Armazena na sessão para uso posterior
    $_SESSION['produtos'] = $listaDeProdutos;

    echo "Arquivo CSV processado com sucesso! Produtos salvos no servidor.<br>";
    echo "<a href='index.html'>Voltar</a>";
} else {
    echo "Erro ao abrir o arquivo.";
}
?>
