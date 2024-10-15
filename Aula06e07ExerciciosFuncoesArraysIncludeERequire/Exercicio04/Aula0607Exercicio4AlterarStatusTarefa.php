<?php
    function alterarStatusTarefa($nomeTarefa, $novoStatus, $listaDeTarefas) {
        if (isset($listaDeTarefas[$nomeTarefa])) {
            $listaDeTarefas[$nomeTarefa] = $novoStatus;
            echo "Status da tarefa '$nomeTarefa' alterado para '$novoStatus'.<br>";
        } else {
            echo "A tarefa '$nomeTarefa' não foi encontrada.<br>";
        }
        return $listaDeTarefas;
    }
?>
