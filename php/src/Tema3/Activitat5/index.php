<?php
if (isset($_POST['user']) && !empty($_POST['user'])){
    session_start();
    $nom = $_POST['user'];
    $password = $_POST['contrasenya'];
    $_SESSION['nom'] = $nom;
    $_SESSION['password'] = $password;


    if (!isset($_SESSION['pages'])) {
        $_SESSION ['pages'] = [];
    }

    echo ("Benvingut " . $nom);
    echo ("Has visitado un total de : " . count($_SESSION['pages']) . " pagines");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <a href="pagina1.php">Pagina 1</a>
    <br>
    <a href="pagina2.php">Pagina 2</a>
    <br>
    <a href="pagina3.php">Pagina 3</a>
    <br>
    <a href=historial.php">Ver mi historial de páginas visitadas</a>
     <br><a href='logout.php'>Tancar sessió</a>
</body>
</html>
