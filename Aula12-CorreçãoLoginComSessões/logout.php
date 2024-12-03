<?php
session_start();
session_unset(); // Limpa os dados que foram armazenados na sessão
session_destroy(); // Destrói a sessão por completo
header('Location: login.html'); // Redireciona para a página de login
exit;
?>
