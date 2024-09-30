<?php
    $listaDeAlunos = 
    ["João" => "TSI", 
    "Maria" => "ECA", 
    "Osvaldo" => "INF", 
    "Luiza" => "MCT",
    "Enzo" => "TSI",
    "Lucas" => "TSI"];

    foreach ($listaDeAlunos as $nome => $curso) {
        if($curso == "TSI"){
            echo $nome . ": " . $curso . "<br>";
        }
    }
?>
