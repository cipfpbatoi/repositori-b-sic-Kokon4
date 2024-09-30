<?php

//Importar Metodos

include_once "functions.php";

//Definir paraula a endevinar

$paraulaAEndevinar = "sebasbuscadordegatitas";
$arrayParaula = str_split($paraulaAEndevinar);
$arrayGuions = str_split($paraulaAEndevinar);
$arrayDescobert = guionitzarArray($arrayGuions);

?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="char">Lletra:</label>
            <input type="char" id="char" name="char" required><br><br>
            <input type="submit" value="Enviar">
    </form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lletra = htmlspecialchars($_POST["char"]);
       $arrayDescobert = comprovarAcerts($arrayParaula,$lletra,$arrayDescobert);
    } else {
        echo "Envia una lletra";
    }

    mostrarPerPantalla($arrayDescobert);
    echo "<br>" . "Numero de acerts: " . contarAcerts($arrayParaula,$lletra) . "<br>";
    echo "Paraula Introduida: " . $lletra;
?>