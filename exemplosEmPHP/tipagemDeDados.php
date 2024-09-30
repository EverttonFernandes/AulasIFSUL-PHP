<?php
    // Exemplo de boas práticas para declaração e uso de variáveis no PHP

    // Inteiro
    $idade = 30;  // Variáveis de tipo inteiro são usadas para contar, idades, quantidades, etc.
    echo "Idade: " . $idade . "<br>";

    // Ponto flutuante
    $salario = 2500.75;  // Usamos floats para valores com casas decimais, como salários ou preços
    echo "Salário: R$" . $salario . "<br>";

    // String
    $nome = "Everton";  // As strings armazenam textos
    echo "Nome: " . $nome . "<br>";

    // Array
    $valores = [10, 20, 30];  // Arrays armazenam listas de dados
    echo "O primeiro valor é: " . $valores[0] . "<br>";

    // Array associativo
    $pessoa = [
        "nome" => "João",
        "idade" => 25
    ];  // Usamos arrays associativos para pares chave/valor
    echo "Nome: " . $pessoa['nome'] . ", Idade: " . $pessoa['idade'] . "<br>";

    // Booleano
    $logado = true;  // Booleanos armazenam verdadeiro ou falso
    if ($logado) {
        echo "Usuário está logado.<br>";
    } else {
        echo "Usuário não está logado.<br>";
    }

    // Constante com define()
    define("NOME_DO_SISTEMA", "GestorWeb");
    echo "Sistema: " . NOME_DO_SISTEMA . "<br>";
    
    // Constante com const
    const TAXA = 0.05;
    echo "Taxa: " . TAXA . "<br>";
