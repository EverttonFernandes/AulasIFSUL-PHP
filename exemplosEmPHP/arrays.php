<?php
    // Criando um array de frutas
    $frutas = ["Maçã", "Banana", "Laranja", "Uva"];

    // Exibindo o conteúdo do array
    echo "Lista de frutas: <br>";
    foreach ($frutas as $fruta) {
        echo $fruta . "<br>";
    }

    // Adicionando uma nova fruta ao array
    $frutas[] = "Morango";

    // Exibindo novamente o array com a nova fruta
    echo "<br>Lista de frutas atualizada: <br>";
    foreach ($frutas as $fruta) {
        echo $fruta . "<br>";
    }
?>
