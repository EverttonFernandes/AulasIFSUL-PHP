<?php
    // Iniciar sessão
    session_start();

    // Configurar tempo de expiração (em segundos)
    $tempoExpiracao = 5;

    // Verificar se a sessão está configurada
    if (isset($_SESSION['ultimo_acesso'])) {
        $tempoInativo = time() - $_SESSION['ultimo_acesso'];
        
        // Verificar se o tempo inativo excede o limite
        if ($tempoInativo > $tempoExpiracao) {
            session_unset(); // Limpar dados da sessão
            session_destroy(); // Destruir sessão
            echo "Sessão expirada. Faça login novamente.";
            exit;
        }
    }

    // Atualizar o tempo do último acesso
    $_SESSION['ultimo_acesso'] = time();

    // Configurar informações na sessão (apenas para exemplo)
    if (!isset($_SESSION['usuario'])) {
        $_SESSION['usuario'] = "João";
    }

    // Exibir mensagem de boas-vindas
    echo "Bem-vindo, " . $_SESSION['usuario'];
?>
