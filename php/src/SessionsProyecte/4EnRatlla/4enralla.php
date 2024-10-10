<?php
session_start();
include_once "functions.php";

// Si es prem el botó de reiniciar, es reinicialitzen les variables de sessió
if (isset($_POST['reiniciar'])) {
    $_SESSION['graella'] = inicialitzarGraella();
    $_SESSION['torn'] = 1;  // El jugador 1 comença primer
} elseif (!isset($_SESSION['graella'])) {
    // Si la sessió no té graella, inicialitzar el joc per primera vegada
    $_SESSION['graella'] = inicialitzarGraella();
    $_SESSION['torn'] = 1;  // El jugador 1 comença primer
}

$graella = $_SESSION['graella'];
$jugador = $_SESSION['torn'];

if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST['reiniciar'])) {
    $columna = intval($_POST['columna']);

    // Realitzar moviment
    if (ferMoviment($graella, $columna, $jugador)) {
        // Comprovar si el moviment ha causat que el jugador guanyi
        if (comprovarVictoria($graella, $jugador)) {
            echo "El jugador $jugador ha guanyat!";
            $_SESSION['final'] = true;  // Indicar que el joc ha acabat
        } elseif (comprovarEmpat($graella)) {
            echo "El joc ha acabat en empat!";
            $_SESSION['final'] = true;
        } else {
            // Canviar de torn només si el joc no ha acabat
            $_SESSION['torn'] = ($jugador == 1) ? 2 : 1;
        }
    } else {
        echo "Aquest moviment no és vàlid.";
    }

    // Actualitzar la graella en la sessió
    $_SESSION['graella'] = $graella;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuatre en Ralla</title>
    <link rel="stylesheet" href="4enralla.css"> 
</head>
<body>
    <h1>Cuatre en Ralla</h1>

    <?php 
    pintarGraella($graella);  // Mostrar la graella
    ?>

    <?php if (!isset($_SESSION['final'])): ?>
        <h2>Jugador <?php echo $_SESSION['torn']; ?>, fes la teva jugada</h2>
        <form method="post">
            <label>Columna (0-6):</label>
            <input type="number" name="columna" min="0" max="6" required>
            <br>
            <button type="submit">Colocar fitxa</button>
        </form>
    <?php endif; ?>

    <!-- Botó per reiniciar el joc -->
    <form method="post">
        <button type="submit" name="reiniciar">Reiniciar joc</button>
    </form>

    <!-- Botó per tancar sessió -->
    <form action="../logout.php" method="post">
        <button type="submit">Tancar sessió</button>
    </form>
</body>
</html>