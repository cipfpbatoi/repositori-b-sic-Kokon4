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
            <input type="text" id="lletra" name="lletra" required><br><br>
            <input type="submit" value="Enviar">
    </form>
<?php
    $lletra;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lletra = htmlspecialchars($_POST["lletra"]);
       comprovarAcerts($arrayParaula,$lletra,$arrayDescobert);
       mostrarPerPantalla($arrayDescobert);
       echo "<br>" . "Numero de acerts: " . contarAcerts($arrayParaula,$lletra) . "<br>";
       echo "Lletra Introduida: " . $lletra;
    } else {
        echo "Envia una lletra";
    }
?>