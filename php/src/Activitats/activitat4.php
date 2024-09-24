<?php
include_once "../helpers/funciones.php";

$cadena = "Hola mundo";
$numVocals = contarVocals(cadena:$cadena);
echo "La cadena es " . $cadena . "i te " . $numVocals . "vocals";

?>