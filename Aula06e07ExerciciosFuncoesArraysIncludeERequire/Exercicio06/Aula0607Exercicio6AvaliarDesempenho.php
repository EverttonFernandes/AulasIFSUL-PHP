<?php
function avaliarDesempenho($listaDeFuncionarios) {
    echo "<br>Lista de Funcionários e Avaliação de Desempenho:<br>";
    foreach ($listaDeFuncionarios as $nomeFuncionario => $nota) {
        $status = $nota > 7 ? "Aprovado" : "Reprovado";

        echo "Funcionário: $nomeFuncionario - Nota: $nota - Status: $status<br>";
    }
}
?>
