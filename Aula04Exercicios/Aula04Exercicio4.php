<?php
    $listaDeAlunos = ["João" => "TSI", "Maria" => "ECA", "Osvaldo" => "INF", "Luiza" => "MCT"];

    foreach ($listaDeAlunos as $nome => $curso) {
        echo $nome . ": " . $curso . "<br>";
    }
?>
