<?php
    // Função que usa arrays e retorna uma string com a soma dos valores
    function processarArray(array $numeros): string {
        $soma = array_sum($numeros);  // Soma os valores do array
        return "A soma do array é: " . $soma;
    }
    
    $valores = [10, 20, 30];
    echo processarArray($valores) . "<br>";
?>
