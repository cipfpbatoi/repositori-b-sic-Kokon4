<?php

function mostrarPerPantalla($cadena) {
    foreach ($cadena as $index) {
        echo $index . " ";
    }
}

function guionitzarArray($array) {
    return $array = array_fill(0,count($array),'_');
}

function comprovarAcerts($paraulaAEndevinar,$lletra,$paraulaBuida) {
    $index = 0;
    foreach ($paraulaAEndevinar as $caracter) {
            $index++;
        if ($lletra == $caracter) {
            $paraulaBuida[$index] = $caracter;
        }
    }
    return $paraulaBuida;
}

function contarAcerts($paraulaAEndevinar,$lletra){
    $contador = 0;
    foreach ($paraulaAEndevinar as $index){
        if ($index == $lletra) {
            $contador++;
        }
    }
    return $contador;
}
?>