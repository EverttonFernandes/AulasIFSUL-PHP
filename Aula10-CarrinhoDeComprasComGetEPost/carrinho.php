<?php
    require_once 'verificarEstoque.php';
    $carrinho = [];

    function adicionarAoCarrinho($produto, $quantidade, $carrinho, $catalogo){
        echo "produto: ".$produto."<br>";
        echo "quantidade: ".$quantidade."<br>";
        if (verificarEstoque($produto, $catalogo)) {
            echo"Tem no estoque";
            if (isset($carrinho[$produto])) {
                $carrinho[$produto] += $quantidade;
            } else {
                $carrinho[$produto] = $quantidade;
            }
            echo "Produto '$produto' adicionado ao carrinho com sucesso!<br>";
            return $carrinho;
        } else {
            echo "Produto '$produto' não está disponível no estoque.<br>";
        }
    }

    function calcularPrecoTotal($carrinho, $catalogo){
        $total = 0;
        foreach ($carrinho as $produto => $quantidade) {
            if (verificarEstoque($produto, $catalogo)) {
                $total += $catalogo[$produto] * $quantidade;
            }
        }
        return $total;
    }
