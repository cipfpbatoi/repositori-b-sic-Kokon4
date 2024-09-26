<?php

function inicialitziarGraella(){
    $graella = array(array());
    for($files = 0; $files < 6; $files++) {
        $graella[$files] = "";
        for($columnes = 0; $columnes < 7; $columnes++){
            $graella[$files][$columnes] = "";
        }
    }
}
?>
