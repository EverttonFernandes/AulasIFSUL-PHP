<?php
    require 'Aula0607Exercicio3ControleDeEstoque.php';
    require 'Aula0607Exercicio3EstoqueDeProdutos.php';

    $produtoEscolhido = "Ar condicionado";
    $quantidadeEscolhida = 1;
    // $produtoEscolhido = "Celular";
    // $quantidadeEscolhida = 1;
    // $produtoEscolhido = "Mesa";
    // $quantidadeEscolhida = 2;
    // $produtoEscolhido = "Geladeira";
    // $quantidadeEscolhida = 1;
    // $produtoEscolhido = "Alexa";
    // $quantidadeEscolhida = 2;
    
    validarSeProdutoConstaNoEstoque($produtoEscolhido, $quantidadeEscolhida, $estoqueDeProdutos);
?>
