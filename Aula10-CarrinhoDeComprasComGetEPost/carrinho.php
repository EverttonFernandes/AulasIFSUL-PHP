<?php
    require_once 'verificarEstoque.php';
    $carrinho = [];

    function adicionarAoCarrinho($produto, $quantidade, $carrinho, $catalogo){
        if (verificarEstoque($produto, $catalogo)) {
            if (produtoJaEstaNoCarrinho($carrinho, $produto)) {
                $carrinho[$produto] = acumularAQuantidadeInformadaComAQuantidadeExistenteNoCarrinho($carrinho[$produto], $quantidade);
            } else {
                $carrinho[$produto] = inserirProdutoESuaQuantidadeInformadaPelaPrimeiraVezNoCarrinho($quantidade);
            }
            echo "Produto '$produto' adicionado ao carrinho com sucesso!<br>";
            return $carrinho;
        } else {
            echo "Produto '$produto' não está disponível no estoque.<br>";
            return $carrinho;
        }
    }

    function produtoJaEstaNoCarrinho($carrinho, $produto): bool{
        return isset($carrinho[$produto]);
    }

    function acumularAQuantidadeInformadaComAQuantidadeExistenteNoCarrinho($quantidadeAtual, $quantidadeAdicional){
        return $quantidadeAtual + $quantidadeAdicional;
    }

    function inserirProdutoESuaQuantidadeInformadaPelaPrimeiraVezNoCarrinho($quantidade){
        return $quantidade;
    }

    function calcularPrecoTotal($carrinho, $catalogo){
        $total = 0;
        foreach ($carrinho as $produto => $quantidade) {
            $total += $catalogo[$produto] * $quantidade;
        }
        return $total;
    }
