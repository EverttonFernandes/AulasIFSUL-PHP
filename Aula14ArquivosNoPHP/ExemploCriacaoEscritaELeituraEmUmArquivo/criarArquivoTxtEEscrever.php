<?php
// Cria arquivo caso não exista e permite escrever no mesmo logo após a sua criação!
$arquivo = fopen("produtos.txt", "a"); // 

// Escrever informações no arquivo
fwrite($arquivo, "Produto: Notebook, Preço: R$5500\n");
fwrite($arquivo, "Produto: Smartphone, Preço: R$5500\n");

// Fechar o arquivo assim que sua escrita é concluída
fclose($arquivo);

echo "Arquivo criado e dados adicionados com sucesso!";
?>

