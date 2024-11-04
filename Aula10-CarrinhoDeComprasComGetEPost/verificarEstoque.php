<?php
function verificarEstoque($produto, $catalogo): bool{
    echo"vai fazer o isset";
    return isset($catalogo[$produto]);
}
