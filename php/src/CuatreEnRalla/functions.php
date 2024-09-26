<?php
    function inicialitzarGraella() {

        echo '<table style="border-collapse: collapse;">'; 
        for ($i = 0; $i < 6; $i++) { // 6 filas
            echo '<tr>'; 
            for ($j = 0; $j < 7; $j++) { // 7 columnas
                echo '<td>[ ]</td>';
            }
            echo '</tr>'; 
        }
        echo '</table>'; 
    }


    
?>
