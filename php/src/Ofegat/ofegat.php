<?php

//Definir paraula a endevinar

$paraulaAEndevinar = "SebasBuscadorDeGatitas";
 
//ArrayDeGuions

$arrayParaula = str_split($paraulaAEndevinar);
$arrayGuions = str_split($paraulaAEndevinar);

//Funcio mostrar per pantallaArrays

function mostrarPerPantalla($array) {
    foreach ($array as $index) {
        echo $index;
    }
}

//Pasar un array a guions _ 

function guionitzarArray($array){
    foreach ($array as $caracter) {
        $caracter = "_"; 
    }
}

// 

function reemplacarLletres($array){

}

mostrarPerPantalla($arrayParaula);
guionitzarArray($arrayGuions);
mostrarPerPantalla($arrayGuions);

?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="lletra">Lletra:</label>
            <input type="char" id="char" name="char" required><br><br>
            <input type="submit" value="Enviar">
    </form>
<?php


mostrarPerPantalla($arrayGuions);

?>