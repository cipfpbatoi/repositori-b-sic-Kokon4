<?php
include_once "functions.php";

$graella = inicialitzarGraella();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $columna = intval($_POST['columna']);
    $jugador = intval($_POST['jugador']);  

    if (ferMoviment($graella, $columna, $jugador)) {
        echo "Moviment realitzat amb èxit!";
    } else {
        echo "Aquest moviment no és vàlid.";
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
        <label>Columna (0-6):</label>
        <input type="number" name="columna" min="0" max="6" required>
        <br>
        <label>Jugador:</label>
        <select name="jugador" required>
            <option value="1">Jugador 1 (Rojo)</option>
            <option value="2">Jugador 2 (Amarillo)</option>
        </select>
        <br>
        <input type="hidden" name="graella" value='<?php echo json_encode($graella); ?>'>
        <button type="submit">Colocar ficha</button>
    </form>
</body>
</html>
