<?php

// Crea un fitxer que utilitze la instrucció 
//match per categoritzar una variable $nota 
//segons el següent criteri: 
//- Si la nota és 10, imprimir "Excel·lent". 
//- Si la nota és 8 o 9, imprimir "Molt bé". 
//- Si la nota és 5, 6 o 7, imprimir "Bé". 
//- Per qualsevol altra nota, imprimir "Insuficient".


$nota = 5;

$resultatNota = match(true) {
    $nota === 10 => 'Excel·lent',
    $nota >= 8 && $nota <= 9 => 'Molt bé',
    $nota >= 5 && $nota <= 7 => 'Bé',
    default => 'Insuficient',
};

echo $resultatNota;