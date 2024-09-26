<?php
include_once "functions.php";
session_start(); 

$graella = inicialitzarGraella(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fila = intval($_POST['fila']);
    $columna = intval($_POST['columna']);
    $jugador = $_POST['jugador'];

    if ($graella[$fila][$columna] === 'buid') {
        $graella[$fila][$columna] = $jugador; 
    } else {
        echo "La celda está ocupada. Intenta de nuevo.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuatre en Ralla</title>
    <link rel="stylesheet" href="CuatreEnRalla.css"> 
</head>
<body>
    <h1>Cuatre en Ralla</h1>

    <?php 
    pintarGraella($graella); 
    ?>

    <h2>Introduce tu jugada</h2>
    <form method="post">
        <label>Fila (0-5):</label>
        <input type="number" name="fila" min="0" max="5" required>
        <br>
        <label>Columna (0-6):</label>
        <input type="number" name="columna" min="0" max="6" required>
        <br>
        <label>Jugador:</label>
        <select name="jugador" required>
            <option value="player1">Jugador 1 (Rojo)</option>
            <option value="player2">Jugador 2 (Amarillo)</option>
        </select>
        <br>
        <button type="submit">Colocar ficha</button>
    </form>

</body>
</html>