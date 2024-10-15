<?php
function exibirHoras($nomeFuncionario, $listaDeFuncionarios){
    if (isset($listaDeFuncionarios[$nomeFuncionario])) {
        $horasTrabalhadas = $listaDeFuncionarios[$nomeFuncionario];

        echo "Colaborador(a): $nomeFuncionario - Total de horas trabalhadas: $horasTrabalhadas horas.<br>";

        if ($horasTrabalhadas > 40) {
            $horasExtras = $horasTrabalhadas - 40;
            echo "Colaborador(a) $nomeFuncionario fez $horasExtras horas extras.<br>";
        }
    } else {
        echo "Colaborador(a) $nomeFuncionario não encontrado.<br>";
    }
}
