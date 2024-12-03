<?php
$nomeVisitante = $_COOKIE['visitante'] ?? null;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo</title>
</head>
<body>
    <?php if ($nomeVisitante): ?>
        <h1>Bem-vindo de volta, <?php echo htmlspecialchars($nomeVisitante); ?>!</h1>
        <p>Ficamos felizes em vê-lo novamente.</p>
    <?php else: ?>

        <h1>Olá! Parece que é sua primeira vez aqui.</h1>
        <form action="salvarNome.php" method="POST">
            <label for="nome">Qual é o seu nome?</label>
            <input type="text" id="nome" name="nome">
            <button type="submit">Salvar</button>
        </form>
        
        <?php if (isset($_GET['erro']) && $_GET['erro'] == 1): ?>
            <p style="color: red;">Por favor, insira seu nome.</p>
        <?php endif; ?>
    <?php endif; ?>
</body>
</html>
