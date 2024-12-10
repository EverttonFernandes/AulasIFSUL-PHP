<?php
// Verifica se o arquivo existe no diretorio usando a função file_exists
if (file_exists("produtos.txt")) {
    // Abre o arquivo para leitura usando o mode r que seria "read"
    $arquivo = fopen("produtos.txt", "r");

    // enquanto não chegar no fim do arquivo continuando mostrando na tela linha por linha.
    while (($linha = fgets($arquivo)) !== false) {
        echo $linha . "<br>";
    }

    // Ao terminar de ler o arquivo, o php fecha ele
    fclose($arquivo);
} else {
    // se o arquivo não estiver no diretorio, vai exibir esta mensagem
    echo "Arquivo não encontrado!";
}
?>

