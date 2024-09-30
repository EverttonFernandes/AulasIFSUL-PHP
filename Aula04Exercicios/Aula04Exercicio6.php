<?php
    $saldoTotal = 0;
    
    depositar(100);
    depositar(50);
    mostrarSaldoTotal();

    function depositar($valor) {
        global $saldoTotal;
        $saldoTotal += $valor;
    }
    function mostrarSaldoTotal(){
        global $saldoTotal;
        echo "Saldo total: R$   " . $saldoTotal;
    }
?>
