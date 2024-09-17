<?php
//Utilitza un bucle for per imprimir els números 
//parells del 0 al 20. 
//Fes-ho també amb un bucle while.

//For

for ($i = 0; $i < 20; $i++){
    if($i % 2 == 0){
        echo $i;
    }
    
$contadorWhile = 0;

while ($contadorWhile < 10) {
    echo $contadorWhile;
    $contadorWhile++;
}

}