<?php
    include 'Aula0607Exercicio4AdicionarTarefa.php';
    include 'Aula0607Exercicio4AlterarStatusTarefa.php';
    include 'Aula0607Exercicio4ExibirTarefas.php';

    $listaDeTarefas = [];
    
    $listaDeTarefas = adicionarTarefa("Fazer aula de inglês", $listaDeTarefas);
    $listaDeTarefas = adicionarTarefa("Ir na academia", $listaDeTarefas);
    $listaDeTarefas = adicionarTarefa("Fazer terapia", $listaDeTarefas);
    $listaDeTarefas = adicionarTarefa("Fazer exercicios de PHP", $listaDeTarefas);

    exibirTarefas($listaDeTarefas);

    $listaDeTarefas = alterarStatusTarefa("Fazer exercicios de PHP", "concluída", $listaDeTarefas);
    $listaDeTarefas = alterarStatusTarefa("Ir na academia", "concluída", $listaDeTarefas);

    exibirTarefas($listaDeTarefas);
?>
