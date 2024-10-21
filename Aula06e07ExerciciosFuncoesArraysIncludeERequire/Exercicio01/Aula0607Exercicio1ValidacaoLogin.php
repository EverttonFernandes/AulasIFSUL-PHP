<?php
function validarLogin($usuario, $senha, $baseDeDadosComLoginDosUsuarios){
    if (isset($baseDeDadosComLoginDosUsuarios[$usuario])) {
        return $baseDeDadosComLoginDosUsuarios[$usuario] === $senha ? "Login bem-sucedido!" : "Usuário ou senha inválidos!";
    }
    return "O usuário informado não existe!";
}
