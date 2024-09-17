<?php
// Assigna múltiples variables 
//i utilitza operadors aritmètics i lògics. 
//Mostra el resultat de cada operació

include_once "./helpers/funciones.php"

$resultatSuma = sumar(4,5);
$resultatResta = resta(6,2);
$resultatMultiplicacio = multiplicar(4,2);
$resultatDivisio = dividir(4,2);

echo $resultatSuma;
echo $resultatResta;
echo $resultatMultiplicacio;
echo $resultatDivisio;

?>