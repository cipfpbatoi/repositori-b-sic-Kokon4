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

function comprovarVictoria($graella, $jugadorActual) {

    return comprovarHoritzontal($graella, $jugadorActual) ||
           comprovarVertical($graella, $jugadorActual) ||
           comprovarDiagonal($graella, $jugadorActual);
}

function comprovarHoritzontal($graella, $jugadorActual) {
    for ($i = 0; $i < 6; $i++) {
        for ($j = 0; $j < 4; $j++) {
            if ($graella[$i][$j] == $jugadorActual && 
                $graella[$i][$j+1] == $jugadorActual &&
                $graella[$i][$j+2] == $jugadorActual &&
                $graella[$i][$j+3] == $jugadorActual) {
                return true;
            }
        }
    }
    return false;
}

function comprovarVertical($graella, $jugadorActual) {
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 7; $j++) {
            if ($graella[$i][$j] == $jugadorActual && 
                $graella[$i+1][$j] == $jugadorActual &&
                $graella[$i+2][$j] == $jugadorActual &&
                $graella[$i+3][$j] == $jugadorActual) {
                return true;
            }
        }
    }
    return false;
}

function comprovarDiagonal($graella, $jugadorActual) {

    for ($i = 3; $i < 6; $i++) {
        for ($j = 0; $j < 4; $j++) {
            if ($graella[$i][$j] == $jugadorActual && 
                $graella[$i-1][$j+1] == $jugadorActual &&
                $graella[$i-2][$j+2] == $jugadorActual &&
                $graella[$i-3][$j+3] == $jugadorActual) {
                return true;
            }
        }
    }

    for ($i = 3; $i < 6; $i++) {
        for ($j = 3; $j < 7; $j++) {
            if ($graella[$i][$j] == $jugadorActual && 
                $graella[$i-1][$j-1] == $jugadorActual &&
                $graella[$i-2][$j-2] == $jugadorActual &&
                $graella[$i-3][$j-3] == $jugadorActual) {
                return true;
            }
        }
    }

    return false;
}

function comprovarEmpat($graella) {
    foreach ($graella[0] as $celda) {
        if ($celda == 0) {
            return false;  
        }
    }
    return true;  
}
?>