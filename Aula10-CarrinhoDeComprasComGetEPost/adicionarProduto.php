<?php
    require_once 'catalogo.php';
    require_once 'carrinho.php';

    $carrinhoAtualizado = [];

    $produto = $_POST['produto'];
    $quantidade = isset($_POST['quantidade']) ? (int)$_POST['quantidade'] : 0;

    if ($produto && $quantidade > 0) {
        $carrinhoAtualizado = adicionarAoCarrinho($produto, $quantidade, $carrinho, $catalogo);
        
        echo "<h3>Carrinho Atual:</h3>";
        if(!empty($carrinhoAtualizado)){
            foreach ($carrinhoAtualizado as $produto => $quantidade) {
                echo "Produto: $produto | Quantidade: $quantidade | Preço Unitário: R$ " . $catalogo[$produto] . "<br>";
            }
            echo "Total: R$ " . calcularPrecoTotal($carrinhoAtualizado, $catalogo) . "<br>";
        } else {
            echo "Seu carrinho de compras ainda está vazio, devido a tentativa de adicionar produtos que não constam no estoque!"."<br>";
        }
    } else {
        echo "Erro: Produto ou quantidade inválidos.";
    }
