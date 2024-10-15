<?php
    function adicionarTarefa($nomeTarefa, $listaDeTarefas) {
        if (!isset($listaDeTarefas[$nomeTarefa])) {
            $listaDeTarefas[$nomeTarefa] = "pendente";
            echo "Tarefa '$nomeTarefa' adicionada com sucesso.<br>";
        } else {
            echo "A tarefa '$nomeTarefa' já existe.<br>";
        }
        return $listaDeTarefas;
    }
?>
