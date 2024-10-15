<?php
include 'Aula0607Exercicio5AdicionarHoras.php';
include 'Aula0607Exercicio5ExibirHoras.php';

$listaDeFuncionarios = [
    "João" => 35,
    "Maria" => 42,
    "Carlos" => 38
];

$listaDeFuncionarios = adicionarHoras("Carlos", 3, $listaDeFuncionarios);
$listaDeFuncionarios = adicionarHoras("Clarice", 30, $listaDeFuncionarios);

exibirHoras("João", $listaDeFuncionarios);
exibirHoras("Maria", $listaDeFuncionarios);
exibirHoras("Carlos", $listaDeFuncionarios);
exibirHoras("Clarice", $listaDeFuncionarios);
exibirHoras("Camila", $listaDeFuncionarios);
