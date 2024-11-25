<?php
    ini_set('session.gc_maxlifetime', 5);
    session_start();

    // time() significa data e hora atual, ou seja o momento exato que vai rodar a aplicação!
    if (!isset($_SESSION['tempo_inicio'])) {
        $_SESSION['tempo_inicio'] = time(); 
    } elseif (time() - $_SESSION['tempo_inicio'] > 5) { // verifica se o tempo atual - o tempo de inicio ultrapassa 5 segundos
        // Expira após 5 segundos
        session_unset();
        session_destroy();
        echo "Sessão expirada!<br>";
        exit();
    }

    echo "Sessão ativa. Bem-vindo!";
?>
