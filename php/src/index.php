<html>
<body>

<?php

include_once "./helpers/funciones.php";

$resultat = sumar(3,5);  // $resultat conté 8

// Assignació de valors
$x = 5;
$y = "Hola món";

// Operacions aritmètiques
$sumar = $x + 10;
$producte = $x * 2;

// Concatenació de cadenes
$nom = "Joan";
$salutacio = $y . ", " . $nom;

// Impressió de resultats
echo $y.'<br/>' ;  // Hola món
echo $sumar.'<br/>' ;  // 15
echo $producte;  // 10
echo $salutacio;  // Hola món, Joan
echo $resultat;
?>

</body>
</html>