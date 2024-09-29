<?php
function inicialitzarGraella() {
    $graella = array();
    for ($i = 0; $i < 6; $i++) {
        $fila = array();
        for ($j = 0; $j < 7; $j++) {
            $fila[] = 0;  
        }
        $graella[] = $fila;
    }
    return $graella;
}

function pintarGraella($graella) {
    echo '<table>';
    for ($i = 0; $i < 6; $i++) {  
        echo '<tr>';  
        for ($j = 0; $j < 7; $j++) {  
            $valor = $graella[$i][$j];
            if ($valor == 1) {
                echo '<td class="player1"></td>';  
            } elseif ($valor == 2) {
                echo '<td class="player2"></td>';  
            } else {
                echo '<td class="buid"></td>'; 
            }
        }
        echo '</tr>';  
    }
    echo '</table>';
}

function ferMoviment(&$graella, $columna, $jugadorActual) {
    for ($i = 5; $i >= 0; $i--) {  
        if ($graella[$i][$columna] == 0) { 
            $graella[$i][$columna] = $jugadorActual;  
            return true;  
        }
    }
    return false; 
}
?>
