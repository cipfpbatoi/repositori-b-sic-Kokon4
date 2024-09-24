<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulari de registre</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .error {
            color: red;
        }
        .success {
            color: green;
        }
    </style>
</head>
<body>

    <h2>Registre d'usuari</h2>

    <?php
    $nomErr = $emailErr = $passwordErr = $confirmPasswordErr = $successMsg = "";
    $nom = $email = $password = $confirmPassword = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nom"])) {
            $nomErr = "El nom és obligatori.";
        } else {
            $nom = test_input($_POST["nom"]);
        }
        if (empty($_POST["email"])) {
            $emailErr = "El correu electrònic és obligatori.";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "El correu electrònic no és vàlid.";
            }
        }

        if (empty($_POST["password"])) {
            $passwordErr = "La contrasenya és obligatòria.";
        } else {
            $password = test_input($_POST["password"]);
           
            if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/", $password)) {
                $passwordErr = "La contrasenya ha de tenir almenys 8 caràcters, incloent una majúscula, una minúscula i un número.";
            }
        }

       
        if (empty($_POST["confirmPassword"])) {
            $confirmPasswordErr = "Has de confirmar la contrasenya.";
        } else {
            $confirmPassword = test_input($_POST["confirmPassword"]);
            if ($password !== $confirmPassword) {
                $confirmPasswordErr = "Les contrasenyes no coincideixen.";
            }
        }

    
        if (empty($nomErr) && empty($emailErr) && empty($passwordErr) && empty($confirmPasswordErr)) {
            $successMsg = "Registre completat correctament!";
        }
    }


    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="nom">Nom:</label><br>
        <input type="text" id="nom" name="nom" value="<?php echo $nom;?>">
        <span class="error">* <?php echo $nomErr;?></span><br><br>

        <label for="email">Correu electrònic:</label><br>
        <input type="email" id="email" name="email" value="<?php echo $email;?>">
        <span class="error">* <?php echo $emailErr;?></span><br><br>

        <label for="password">Contrasenya:</label><br>
        <input type="password" id="password" name="password" value="<?php echo $password;?>">
        <span class="error">* <?php echo $passwordErr;?></span><br><br>

        <label for="confirmPassword">Confirma la contrasenya:</label><br>
        <input type="password" id="confirmPassword" name="confirmPassword" value="<?php echo $confirmPassword;?>">
        <span class="error">* <?php echo $confirmPasswordErr;?></span><br><br>

        <input type="submit" value="Registra't">
    </form>

    <p class="success"><?php echo $successMsg;?></p>

</body>
</html>

