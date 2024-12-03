<?php
// Verifica se o cookie 'usuario' existe
if (isset($_COOKIE['usuario'])) {
    echo "Bem-vindo, " . htmlspecialchars($_COOKIE['usuario']) . "!<br>";
} else {
    echo "Cookie 'usuario' não encontrado ou expirou.<br>";
}

// Verifica se o cookie 'preferencia' existe
if (isset($_COOKIE['preferencia'])) {
    echo "Sua preferência é: " . htmlspecialchars($_COOKIE['preferencia']) . "<br>";
} else {
    echo "Cookie 'preferencia' não encontrado ou expirou.<br>";
}
?>
