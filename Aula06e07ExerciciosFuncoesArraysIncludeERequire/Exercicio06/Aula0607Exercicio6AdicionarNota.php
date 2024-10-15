<?php
function adicionarNota($nomeFuncionario, $nota, $listaDeFuncionarios){
    if ($nota < 0 || $nota > 10) {
        echo "A nota para o funcionário '$nomeFuncionario' deve ser entre 0 e 10.<br>";
        return $listaDeFuncionarios;
    }

    $listaDeFuncionarios[$nomeFuncionario] = $nota;
    echo "Nota do funcionário '$nomeFuncionario' adicionada/atualizada com sucesso.<br>";

    return $listaDeFuncionarios;
}
