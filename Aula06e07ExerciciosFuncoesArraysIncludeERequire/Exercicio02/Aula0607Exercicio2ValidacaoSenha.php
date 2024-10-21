<?php
    function validarSenha($senha) {
        if (possuiOitoDigitos($senha) &&
            possuiLetraMaiscula($senha) &&
            possuiLetraMinuscula($senha) &&
            possuiNumero($senha) &&
            possuiCaracterEspecial($senha) &&
            naoPossuiEspacosEmBranco($senha)) {
            echo "Senha forte!";
        } else {
            echo "A senha não atende aos critérios!";
        }
    }

    function possuiOitoDigitos($senha): bool {
        return strlen($senha) >= 8;
    }

    function possuiLetraMaiscula($senha): bool {
        foreach (str_split($senha) as $caractere) {
            if (ctype_upper($caractere)) {
                return true;
            }
        }
        return false;
    }

    function possuiLetraMinuscula($senha): bool {
        foreach (str_split($senha) as $caractere) {
            if (ctype_lower($caractere)) {
                return true;
            }
        }
        return false;
    }

    function possuiNumero($senha): bool {
        foreach (str_split($senha) as $caractere) {
            if (is_numeric($caractere)) {
                return true;
            }
        }
        return false;
    }

    function possuiCaracterEspecial($senha): bool {
        if(strpbrk($senha, '!@#$%^&*()-_=+{}[]|:;,.<>?/\\~`') !== false){
            return true;
        }
        return false;
    }

    function naoPossuiEspacosEmBranco($senha): bool {
        foreach (str_split($senha) as $caractere) {
            if (ctype_space($caractere)) {
                return false;
            }
        }
        return true;
    }
?>
