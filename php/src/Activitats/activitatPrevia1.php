<?php

$fruites = array("Poma","Platan","Pera");


function afegirElement($arrayFruites,$fruta){
    $arrayFruites[] = $fruta;
    return $arrayFruites;
}

$pera = "pimento";

$fruites = afegirElement($fruites,$pera);

foreach ($fruites as $fruita) {
    echo $fruita;
}

?>