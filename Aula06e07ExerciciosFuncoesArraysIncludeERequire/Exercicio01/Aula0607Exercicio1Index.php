<?php
    include 'Aula0607Exercicio1Usuarios.php';
    require 'Aula0607Exercicio1ValidacaoLogin.php';

    $usuario = "Everton";
    $senha = 123;

    $resultado = validarLogin($usuario, $senha, $baseDeDadosComLoginDosUsuarios);
    echo $resultado;
?>
