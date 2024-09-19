<?php
//Utilitza un bucle for per imprimir els números 
//parells del 0 al 20. 
//Fes-ho també amb un bucle while.

echo "Números parells (for):<br>";
for ($i = 0; $i <= 20; $i += 2) {
    echo $i . "<br>";
}

echo "Números parells (while):<br>";
$contadorWhile = 0;
while ($contadorWhile <= 20) {
    echo $contadorWhile . "<br>";
    $contadorWhile += 2;
}

