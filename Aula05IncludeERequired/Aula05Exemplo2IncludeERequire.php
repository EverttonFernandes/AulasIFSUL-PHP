<?php
    // Tentando incluir um arquivo inexistente com include
    include 'arquivoInexistente.php';  // Vai gerar um aviso, mas a execução continua
    echo "Ao usar o include, a execução continua, mesmo que o arquivoInexistente.php não tenha sido encontrado.<br>";

    // Tentando incluir um arquivo inexistente com require
    require 'arquivoInexistente.php';  // Vai gerar um erro fatal e parar a execução
    echo "Ao usar o require o código não será exibido quando um arquivoInexistente.php não for encontrado.";
?>
