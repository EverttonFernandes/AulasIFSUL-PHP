<?php
require_once 'verificarSessaoECookie.php'; // Verifica se a sessão e o cookie estão ativos usando verificarSessaoECookie.php.
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>
<body>
    <h1>Bem-vindo!</h1>
    <p>
        <?php
            echo "Olá, " . $_SESSION['usuario'] . "!";
        ?>
    </p>
     <!-- Se o botão for precionado o usuário fará logout, usando a lógica do arquivo logout.php -->
    <form action="logout.php" method="POST">
        <button type="submit">Logout</button>
    </form>
</body>
</html>
