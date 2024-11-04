<?php
function verificarEstoque($produto, $catalogo): bool{
    return isset($catalogo[$produto]);
}
