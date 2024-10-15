<?php
function adicionarHoras($nomeFuncionario, $horasTrabalhadas, $listaDeFuncionarios): array{
    if (isset($listaDeFuncionarios[$nomeFuncionario])) {
        $listaDeFuncionarios[$nomeFuncionario] += $horasTrabalhadas;
    } else {
        $listaDeFuncionarios[$nomeFuncionario] = $horasTrabalhadas;
    }

    return $listaDeFuncionarios;
}
