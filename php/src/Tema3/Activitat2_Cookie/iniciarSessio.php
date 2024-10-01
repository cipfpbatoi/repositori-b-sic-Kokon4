<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = $_POST['nom'];
    $contrasenya = $_POST['contrasenya'];
    $_SESSION['nom'] = $nom;
    $_SESSION['contrasenya'] = $contrasenya;


} else {
    echo 'No has enviat cap de dada';
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <h1>Benvingut <?php echo $_SESSION['nom']; ?></h1>
    <p>La vostra contraseña era <?php echo $_SESSION['contrasenya'];?></p>
    <form action="formulari.php" method="POST">
        <input type="submit" name="cerrar_session" value="Cerrar sesion"></form>
       
        <?php 
            if (isset($_POST['cerrar_session'])) {
            session_destroy();
            session_unset();
            exit();
        }
        ?>
    </form>

</body>
</html>