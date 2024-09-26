<?php
   
   function inicialitzarGraella() {
       $graella = array();
       for ($i = 0; $i < 6; $i++) { 
           $graella[$i] = array_fill(0, 7, 'buid'); 
       }
       return $graella; 
   }
   
   function pintarGraella($graella) {
       echo '<table style="border-collapse: collapse;">'; 
       foreach ($graella as $fila) {
           echo '<tr>'; 
           foreach ($fila as $celda) {
               echo '<td class=' . $celda . '"></td>';
           }
           echo '</tr>'; 
       }
       echo '</table>'; 
   }
   
?>
