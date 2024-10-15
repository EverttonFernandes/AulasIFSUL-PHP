<?php
    function exibirTarefas($tarefas) {
        echo "<br>Lista de Tarefas:<br>";
        foreach ($tarefas as $nomeTarefa => $statusTarefa) {
            echo "Tarefa: $nomeTarefa - Status: $statusTarefa<br>";
        }
    }
?>
