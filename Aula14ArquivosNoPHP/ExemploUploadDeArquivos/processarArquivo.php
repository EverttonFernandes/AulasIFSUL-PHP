<?php
// Verifica se o formulário foi enviado via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $arquivo = $_FILES['arquivo'];

    // Obtém a extensão do arquivo e converte para letras minúsculas
    $extensao = strtolower(pathinfo($arquivo['name'], PATHINFO_EXTENSION));

    // Define as extensões permitidas
    $tiposPermitidos = ['txt', 'csv'];

    // Valida se o arquivo tem uma extensão permitida
    if (!in_array($extensao, $tiposPermitidos)) {
        echo "Erro: Envie apenas arquivos no formato TXT ou CSV.";
        exit; // Encerra o script se o tipo do arquivo não for permitido
    }

    // Lê o conteúdo do arquivo e retorna cada linha como um elemento do array
    $conteudo = file($arquivo['tmp_name']); // file() lê o arquivo e retorna um array, cada linha é um elemento

    // Array para armazenar os produtos
    $produtos = [];

    // Itera sobre cada linha do conteúdo do arquivo
    foreach ($conteudo as $linha) {
        // Divide os dados da linha por vírgula e remove espaços em branco
        $dados = explode(',', trim($linha)); // explode() separa a string em partes com base no delimitador

        // Adiciona os dados ao array de produtos
        $produtos[] = [
            'nome' => $dados[0], // Primeiro elemento é o nome do produto
            'preco' => $dados[1] ?? 'Não tem preço' // Segundo elemento é o preço, se existir
        ];
    }

    // Exibe os produtos carregados
    echo "<h1>Produtos Carregados</h1>";
    foreach ($produtos as $produto) {
        echo "Nome: " . $produto['nome'] . " | Preço: R$ " . $produto['preco'] . "<br>";
    }
}
?>
