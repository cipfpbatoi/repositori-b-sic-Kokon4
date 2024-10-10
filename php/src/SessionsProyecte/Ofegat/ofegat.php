<?php
session_start();
include_once "functions.php";

if (!isset($_SESSION['paraulaAEndevinar']) || isset($_POST['reiniciar'])) {
    $_SESSION['paraulaAEndevinar'] = "SebasBuscadorDeGatitas";
    $_SESSION['arrayParaula'] = str_split($_SESSION['paraulaAEndevinar']);
    $_SESSION['arrayGuions'] = str_split($_SESSION['paraulaAEndevinar']);
    $_SESSION['arrayDescobert'] = guionitzarArray($_SESSION['arrayGuions']);
    $_SESSION['intents'] = 10; 
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST['reiniciar']) && !isset($_POST['tancarSessio'])) {
    $lletra = htmlspecialchars($_POST["lletra"]);

    comprovarAcerts($_SESSION['arrayParaula'], $lletra, $_SESSION['arrayDescobert']);

    mostrarPerPantalla($_SESSION['arrayDescobert']);

    $acerts = contarAcerts($_SESSION['arrayParaula'], $lletra);
    echo "<br>Numero d'encerts: " . $acerts . "<br>";
    echo "Lletra introduïda: " . $lletra;

    if ($acerts == 0) {
        $_SESSION['intents']--;
    }

    if ($_SESSION['intents'] <= 0) {
        echo "<br><strong>Has perdut! La paraula era: " . $_SESSION['paraulaAEndevinar'] . "</strong>";
    } elseif (!in_array('_', $_SESSION['arrayDescobert'])) {
        echo "<br><strong>Enhorabona! Has endevinat la paraula: " . $_SESSION['paraulaAEndevinar'] . "</strong>";
    }

    echo "<br>Intents restants: " . $_SESSION['intents'];
}

?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="char">Lletra:</label>
    <input type="text" id="lletra" name="lletra" maxlength="1" required><br><br>
    <input type="submit" value="Enviar">
</form>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <input type="submit" name="reiniciar" value="Reiniciar joc">
</form>

<form action="../logout.php" method="post">
    <input type="submit" name="tancarSessio" value="Tancar sessió">
</form>