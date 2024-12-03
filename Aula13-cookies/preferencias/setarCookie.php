<?php
// Define um cookie válido por 1 minuto
setcookie('usuario', 'Everton', time() + (1 * 60), '/');
setcookie('preferencia', 'Tema Escuro', time() + (1 * 60), '/');

echo "Cookies foram definidos! Acesse a página ler_cookie.php para visualizá-los.";
?>
