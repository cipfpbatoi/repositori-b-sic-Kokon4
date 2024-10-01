<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Logica de php aqui es receveixen les dades demanades
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = htmlentities($_POST['email']);
            $missatge = htmlentities($_POST['missatge']);
            //Si les dades no estan arreplegades es que no s'ha completat
            //el formulari
        } else {
            //Aqui mostrem el formulari
            ?>
            <h2>Formulari</h2>
            <form action=""<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
            <label for="email">Correu electronic</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="missatge">Missatge</label>
            <input type="text" id="missatge" name="missatge" required><br><br>
            <input type="submit" value="Enviar">
        </form>
            <?php
            echo($missatge);
        }
    ?>
</body>
</html>