<?php
session_start();
session_unset(); // Limpa os dados que foram armazenados na sessão
session_destroy(); // Destrói a sessão por completo

// Remove o cookie, se existir definindo o tempo como negativo para forçar a expiração
if (isset($_COOKIE['usuario'])) {
    setcookie('usuario', '', time() - 3600, '/');
}

header('Location: login.html'); // Redireciona para a página de login
exit;
?>
