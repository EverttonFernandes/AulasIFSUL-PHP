<?php
    $pessoas = [
        "João" => 22,
        "Maria" => 19,
        "Carlos" => 25,
        "Ana" => 18,
        "Lucas" => 30
    ];

    $maioresDeVinteUm = obterPessoasMaioresDeVinteUmAnosDeIdade($pessoas);

    function obterPessoasMaioresDeVinteUmAnosDeIdade(array $pessoas): array {
        $arrayComPessoasMaioresDeVinteUmAnos = [];

        foreach ($pessoas as $nome => $idade) {
            if ($idade > 21) {
                $arrayComPessoasMaioresDeVinteUmAnos[$nome] = $idade;
            }
        }

        return $arrayComPessoasMaioresDeVinteUmAnos;
    }

    echo "Pessoas com mais de 21 anos:<br>";
    foreach ($maioresDeVinteUm as $nome => $idade) {
        echo "Nome: $nome, Idade: $idade<br>";
    }
?>
