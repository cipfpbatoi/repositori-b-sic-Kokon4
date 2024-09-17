<?php

// Crea un fitxer que utilitze la instrucció 
//match per categoritzar una variable $nota 
//segons el següent criteri: 
//- Si la nota és 10, imprimir "Excel·lent". 
//- Si la nota és 8 o 9, imprimir "Molt bé". 
//- Si la nota és 5, 6 o 7, imprimir "Bé". 
//- Per qualsevol altra nota, imprimir "Insuficient".


$nota = 5;

$resultatNota = match($nota) {
    
    $nota < 5 => 'Insuficient',
    $nota >= 5 || $nota<= 7 => 'Be',
    $nota >= 8 || $nota<= 9 => 'Molt be',
    $nota == 10 => 'Excelent',
    default => 'Nota erronea',

};

echo $resultatNota;