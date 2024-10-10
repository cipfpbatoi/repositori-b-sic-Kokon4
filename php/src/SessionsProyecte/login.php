<?php
        session_start();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nom = htmlentities($_POST['nom']);
            $contrasenya = htmlentities($_POST['contrasenya']);
            $_SESSION['nom'] = $nom;
            $_SESSION['contrasenya'] = $contrasenya;
            if (isset($_POST['recordarme'])) {
                setcookie('nom', $nom, time() + (7 * 24 * 60 * 60)); 
            }
            header("Location: pantallaInicial.php");
            exit();
        }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inici de Sessió</title>
</head>
<body>
    <h2>Benvingut a l'aplicació</h2>
    <form action="login.php" method="POST">
        <label for="nom">Nom Usuari: </label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="contrasenya">Contrasenya: </label>
        <input type="password" id="password" name="contrasenya" required><br><br>

        <label for="recordarme">Recordar-me: </label>
        <input type="checkbox" id="recordarme" name="recordarme"><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>