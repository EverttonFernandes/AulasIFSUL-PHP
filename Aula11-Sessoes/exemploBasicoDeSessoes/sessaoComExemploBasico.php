<?php
    // Iniciar a sessão
    session_start();

    // Armazenar dados na sessão
    $_SESSION['usuario'] = 'Everton';

    if(isset($_SESSION['usuario'])){
        // Recuperar dados da sessão
        echo "Bem-vindo, " . $_SESSION['usuario'];
    } else {
        echo "Usuario não encontrado! " . $_SESSION['usuario'];
    }

    // Remover um dado específico da sessão
    unset($_SESSION['usuario']);

    // Destruir toda a sessão
    session_destroy();
?>
