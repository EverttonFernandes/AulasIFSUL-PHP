<?php
    require_once 'catalogo.php';
    require_once 'carrinho.php';

    $carrinho = [];

    $produto = "Tablet";
    $quantidade = 2;

    if ($produto && $quantidade > 0) {
        echo "produto: ".$produto;
        echo "produto: ".$produto;
        adicionarAoCarrinho($produto, $quantidade, $carrinho, $catalogo);

        echo "<h3>Carrinho Atual:</h3>";
        foreach ($carrinho as $produto => $quantidade) {
            echo "Produto: $produto | Quantidade: $quantidade | Preço Unitário: R$ " . $catalogo[$produto] . "<br>";
        }
        echo "Total: R$ " . calcularPrecoTotal($carrinho, $catalogo) . "<br>";
    } else {
        echo "Erro: Produto ou quantidade inválidos.";
    }
