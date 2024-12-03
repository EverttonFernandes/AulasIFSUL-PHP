<?php
require_once 'usuarios.php';

session_start();

// Lógica para autenticação dos usuários
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nomeUsuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if (isset($usuarios[$nomeUsuario]) && $usuarios[$nomeUsuario] === $senha) {
        // Verifica se o nome de usuário e senha estão corretos com base no array associativo no arquivo usuarios.php
        $_SESSION['usuario'] = $nomeUsuario; // Se sim guarda o nome do usuario na sessão
        header('Location: perfil.php'); // ... e redireciona o usuário a página perfil.php
        exit;
    } else {
        header('Location: login.html?error=1'); // se tudo der errado o usuário permanece na paginal inicial
        exit;
    }
}
?>
