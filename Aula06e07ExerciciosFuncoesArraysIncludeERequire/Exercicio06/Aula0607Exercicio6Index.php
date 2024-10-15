<?php
include 'Aula0607Exercicio6AdicionarNota.php';
include 'Aula0607Exercicio6AvaliarDesempenho.php';

$listaDeFuncionarios = [];
$listaDeFuncionarios = adicionarNota("João", 8.5, $listaDeFuncionarios);
$listaDeFuncionarios = adicionarNota("Maria", 6.7, $listaDeFuncionarios);
$listaDeFuncionarios = adicionarNota("Jose", 9.0, $listaDeFuncionarios);
$listaDeFuncionarios = adicionarNota("Camila", 5.3, $listaDeFuncionarios);
$listaDeFuncionarios = adicionarNota("Bia", 11.3, $listaDeFuncionarios);

avaliarDesempenho($listaDeFuncionarios);
