<?php
    $listaDeFrutas = array("Maça", "Banana", "Laranja", "Uva", "Manga");
    sort($listaDeFrutas);
    
    foreach($listaDeFrutas as $fruta){
        echo $fruta . "<br>";
    }
?>
