<?php

function sumar($a, $b) {
    return $a + $b;
}

function restar($a,$b) {
    return $a - $b;
}

function multiplicar($a,$b){
    return $a * $b;
}

function dividir($a,$b){
    return $a / $b;
}

function calcularMitjana($array){
   return array_slice($array, count($array) /2, 1)[0];
}



function contarVocals($cadena){
    $contadorVocals = 0;
    strtolower($cadena);
    foreach($cadena as $vocal) {
        if ($vocal == 'a' || 'e' || 'i' || 'o' || 'u') {
            $contadorVocals++;
        }
    }
    return $contadorVocals;
}