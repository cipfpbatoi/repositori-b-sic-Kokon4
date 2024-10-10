<?php
session_start();
include_once "functions.php";

if (isset($_POST['reiniciar'])) {
    $_SESSION['graella'] = inicialitzarGraella();
    $_SESSION['torn'] = 1;  
} elseif (!isset($_SESSION['graella'])) {
   
    $_SESSION['graella'] = inicialitzarGraella();
    $_SESSION['torn'] = 1; 
}

$graella = $_SESSION['graella'];
$jugador = $_SESSION['torn'];

if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST['reiniciar'])) {
    $columna = intval($_POST['columna']);

    if (ferMoviment($graella, $columna, $jugador)) {

        if (comprovarVictoria($graella, $jugador)) {
            echo "El jugador $jugador ha guanyat!";
            $_SESSION['final'] = true;  
        } elseif (comprovarEmpat($graella)) {
            echo "El joc ha acabat en empat!";
            $_SESSION['final'] = true;
        } else {

            $_SESSION['torn'] = ($jugador == 1) ? 2 : 1;
        }
    } else {
        echo "Aquest moviment no és vàlid.";
    }

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
    pintarGraella($graella);  
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

    <form method="post">
        <button type="submit" name="reiniciar">Reiniciar joc</button>
    </form>

    <form action="../logout.php" method="post">
        <button type="submit">Tancar sessió</button>
    </form>
</body>
</html>